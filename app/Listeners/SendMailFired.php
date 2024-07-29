<?php

namespace App\Listeners;

use App\Events\SentMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
class SendMailFired
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
     * @param \App\Events\SentMail;
     * @return void
     */
    public function handle(SentMail $event)
    {
        //
       $user =  User::all($event->userId)->toArray();

       Mail::send('eventMail', $user, function ($message) use($user){
          $message->to($user['email']);
          $message->subject('Event testing');
       });
    }
}
