<?php

namespace App\Listeners;

use App\Events\UserWasRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\UserRegistered;


class EmailUserRegistrationNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasRegistered  $event
     * @return void
     */
    public function handle(UserWasRegistered $event)
    {
        $event->user->notify(new UserRegistered($event->user));
    }
}
