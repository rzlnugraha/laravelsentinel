<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReminderRequest;
use App\User;
use Illuminate\Http\Request;
use Validator, Event, Session, Reminder, Sentinel;
use Alert;

class RemindersController extends Controller
{
    public function create()
    {
        return view('emails.create');
    }
    
    public function store(Request $request)
    {
        $getUser = User::where('email',$request->email)->first();

        if ($getUser) {
            $user = Sentinel::findById($getUser->id);
            ($reminder = Reminder::exists($user)) || ($reminder = Reminder::create($user));
            Event::fire(new ReminderEvent($user, $reminder));
            Alert::success('Silahkan cek email','Success');
        } else {
            Alert::error('Email not valid','Error');
        }
        return view('emails.create');
    }
    
    public function edit($id, $code)
    {
        $user = Sentinel::findById($id);
        if (Reminder::exists($user, $code)) {
            return view('emails.edit', compact('id','code'));
        } else {
            return redirect(url('/'));
        }
    }

    public function update(ReminderRequest $request, $id, $code)
    {
        $user = Sentinel::findById($id);
        $reminder = Reminder::exists($user, $code);

        if ($reminder) {
            Alert::success('Berhasil merubah password','Success');
            Reminder::complete($user, $code, $request->password);
            return redirect()->route('login');
        } else {
            Alert::warning('Password harus sama','Error');
        }
    }
}
