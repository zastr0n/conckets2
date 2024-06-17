<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = ticket::orderBy('id_tickets')->get();
        return view('home', compact('data'));
    }

    public function payment(Request $request)
    {
        $data = ticket::find($request->id);
        // dd($data);
        return view('payment', compact('data'));
    }
}
