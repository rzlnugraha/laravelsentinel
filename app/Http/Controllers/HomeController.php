<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\JobPertama;
use App\Jobs\JobKedua;
use App\User;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['employee','manager']);
        return view('page.home');
    }

    public function tesJob(Request $request)
    {
        $user = User::find(1);
        // dd($user);
        JobPertama::dispatch('Belajar queue dengan');
        JobKedua::dispatch($user);
        return 'berhasil';
    }
}
