<?php

namespace App\Http\Controllers;
use Sentinel;
use Alert;
use App\Http\Requests\UserRequest;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function home()
    {
        return view('page.home');
    }
    public function index()
    {
        return view('page.index');
    }
    public function signup()
    {
        return view('auth.register');
    }

    public function signup_store(UserRequest $req)
    {
        Sentinel::registerAndActivate($req->all());
        Alert::success('Berhasil mendaftar','Register');
        return back();
    }
}
