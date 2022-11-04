<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function edit()
    {
        // ambil data user berdasarkan id user yang sedang login
        $item = User::where('id', Auth::user()->id)->first();

        // kembalikan data user tersebut ke halaman edit profile
        return view('pages.profile', [
            'item' => $item
        ]);
    }

    public function update(Request $request)
    {
        // membuat validasi untuk nama, username, dan nip
        $request->validate([
            'nama' => ['required', 'string', 'max:100'],
        ]);

        // membuat validasi untuk email
        if ($request->email !== Auth::user()->email) {
            $request->validate([
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            ]);
        }

        // membuat validasi untuk password
        if ($request->password) {
            $request->validate([
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
        }

        // memanggil data user berdasarkan id user yang sedang login
        $item = User::where('id', Auth::user()->id)->first();

        // lakukan update data satu persatu
        $item->nama = $request->nama;
        $item->email = $request->email;
        if ($request->password) {
            $item->password = Hash::make($request->password);
        }

        // simpan update-an
        $item->save();

        // kembalikan ke halaman profile
        return redirect()->route('dashboard')->with('success', 'Berhasil Mengubah Profile');
    }
}
