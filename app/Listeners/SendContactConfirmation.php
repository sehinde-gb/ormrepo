<?php

namespace App\Listeners;

use App\Events\ContactWasSent;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\ContactSent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class SendContactConfirmation implements ShouldQueue
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
     * @param  ContactWasSent  $event
     * @return void
     */
    public function handle(ContactWasSent $event)
    {
        flash()->success('Feedback', 'Your feedback has been published !');

        $when = Carbon::now()->addMinutes(5);

        Mail::to('ormrepo@gmail.com')
            ->later($when, new ContactSent($event));

    }
}
