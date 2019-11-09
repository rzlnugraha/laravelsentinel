<?php

namespace App\Http\Controllers;
use Sentinel;
use Alert;
use Session;
use App\Http\Requests\SessionRequest;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check()) {
            Alert::success("Kamu sedang login mang $user->email", 'Udah login');
            return redirect('home');
        } else {
            return view('auth.login');
        }
    }

    public function login_store(SessionRequest $req)
    {
        if ($user = Sentinel::authenticate($req->all())) { // Buat cek login authenticate
            Alert::success('Assalamualaikum ' . $user->first_name . ' ' . $user->last_name, 'Masuk');
            return redirect(route('home'));
        } else {
            Alert::error('Gagal, Password atau Email salah!', 'Error');
            return view('auth.login');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        Alert::info('Dadah, login lagi ya!', 'Logout');
        return redirect('/');
    }
}
