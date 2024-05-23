<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $data = User::all();
        return view('users.index', compact('data'));
    }

    public function add(Request $request)
    {
        return view('users.add');
    }
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', Password::defaults(), 'confirmed'],
            'alamat' => ['required'],
            'no_telp' => ['required', 'unique:users', 'numeric'],
            'tgl_lahir' => ['required'],
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->alamat = $request->alamat;
        $user->no_telp = $request->no_telp;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->save();
        return redirect()->route('users')->withMessage('success', 'Success Create Users');
    }

    public function edit($id)
    {
        $data = User::find($id);
        // dd($data);
        return view('users.edit', compact('data'));
    }
    public function update(Request $request)
    {
        // dd($request);

        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'alamat' => ['required'],
            'no_telp' => ['required'],
            'tgl_lahir' => ['required'],
        ]);

        $data = User::find($request->id);
        $data->name = $validated['name'];
        $data->email = $validated['email'];
        $data->alamat = $validated['alamat'];
        $data->no_telp = $validated['no_telp'];
        $data->tgl_lahir = $validated['tgl_lahir'];
        $data->save();
        return redirect()->route('users')->withMessage('success', 'Success Edit Users');
    }
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('users')->withMessage('success', 'Success Delete Users');
    }
}
