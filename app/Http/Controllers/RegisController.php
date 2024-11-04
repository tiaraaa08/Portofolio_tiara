<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisController extends Controller
{
    public function regis()
    {
        return view('regis'); // Pastikan ini adalah nama view yang benar
    }

    public function submit(Request $request)
    {
        $user = new User();
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('login');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('tabel');
        }
        return view('login'); // Pastikan ini adalah nama view yang benar
    }

    public function submitlogin(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('tabel'); // Arahkan ke tabel setelah login
        } else {
            return redirect()->back()->with('gagal', 'Email atau password salah');
        }
    }

    public function logout()
    {
        Auth::logout(); // Log out user
        return redirect('login'); // Redirect to the signin page
    }

    public function tabel()
    {
        // Cek apakah pengguna terautentikasi
        if (Auth::check()) {
            $porto = Porto::all();
            $user = User::orderBy('id', 'desc')->first();
                if (!$user) { //ini asline $porto = Porto::all(); sama $user = User::all(); sama redirect('/login'); aja wes cukup, tapi karena aku pgn data akun sg muncul cuman 1 dan sg paling baru diinputne sg masuk, dadi ditambahi tetek mberek it
                    // Tindakan jika tidak ada data, misalnya redirect atau tampilkan pesan error.
                    return redirect('/')->with('error', 'Data pengguna tidak ditemukan.');
                }
            return view('tabel', compact('porto', 'user'));
            }
        return redirect('login'); // Jika belum login, arahkan ke halaman login
    }
}
