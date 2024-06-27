<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pemesanan::join('users', 'pemesanan.id_pemesan', 'users.id')->join('tickets', 'pemesanan.id_tickets', 'tickets.id_tickets')->select('pemesanan.id', 'users.name', 'jml_tiket', 'total_harga', 'status', 'tickets.nama')->get();
        return view('transaksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = pemesanan::find($request->id);
        $data->status = $request->status;
        $data->save();

        return redirect()->route('transaksi')->withMessage('success', 'Success Update Pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemesanan $pemesanan)
    {
        //
    }
}
