<?php

namespace App\Http\Controllers;
use Sentinel;
use Alert, DB;
use App\Http\Requests\UserRequest;
use App\Jobs\JobKedua;

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
        // Sentinel::registerAndActivate($req->all());
        // Alert::success('Berhasil mendaftar','Register');
        // return back();

        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('writer');
            $role_id = $role->id;
            $credentials = [
                'first_name' => $req->first_name,
                'last_name' => $req->last_name,
                'email' => $req->email,
                'password' => $req->password,
            ];
            $user = Sentinel::registerAndActivate($credentials);
            $user->roles()->attach($role_id);
            Alert::success('Berhasil mendaftar','Success');
            DB::commit();
            JobKedua::dispatch($user);
        } catch (\Throwable $errors) {
            DB::rollback();
            Alert::error($errors, 'Error');
        }
        return back();
    }
}
