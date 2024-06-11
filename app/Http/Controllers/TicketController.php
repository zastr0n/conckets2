<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ticket::all();
        return view('ticket.index', compact('data'));
    }
    public function add(Request $request)
    {
        return view('ticket.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'harga' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'jumlah' => ['required', 'numeric'],
        ]);
        $ticket = new ticket();
        $ticket->nama = $request->name;
        $ticket->harga = $request->harga;
        $ticket->jumlah = $request->jumlah;
        $ticket->save();
        return redirect()->route('tickets')->withMessage('success', 'Success Create Ticketss');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = ticket::find($id);
        return view('ticket.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'harga' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
            'jumlah' => ['required', 'numeric'],
        ]);

        $data = ticket::find($request->id);
        $data->nama = $validated['name'];
        $data->harga = $validated['harga'];
        $data->jumlah = $validated['jumlah'];
        $data->save();
        return redirect()->route('tickets')->withMessage('success', 'Success Edit Tickets');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ticket::where('id_tickets', $id)->delete();
        return redirect()->route('tickets')->withMessage('success', 'Success Delete Tickets');
    }
}
