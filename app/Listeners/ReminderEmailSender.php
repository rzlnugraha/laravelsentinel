<?php

namespace App\Listeners;

use App\Events\ReminderEvent;
use Mail;
use App\Mail\ReminderMailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReminderEmailSender
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReminderEvent  $event
     * @return void
     */
    public function handle(ReminderEvent $event)
    {
        $user = $event->user;
        $reminder = $event->reminder;

        $detail = [
            'id' => $user->id,
            'email' => $user->email,
            'code' => $reminder->code
        ];
        Mail::to($user->email)->queue(new ReminderMailable($detail));
    }
}
