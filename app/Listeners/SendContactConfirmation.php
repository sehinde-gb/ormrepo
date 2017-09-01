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
        flash()->success('Feedback', 'We will provide a response within 24 hours');

        $when = Carbon::now()->addMinutes(1);

        Mail::to('info@ormrepo.co.uk')
            ->later($when, new ContactSent($event));

    }
}
