<?php

namespace App\Listeners;

use App\Events\QuoteWasSent;
use App\Mail\QuoteSent;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendQuoteConfirmation implements ShouldQueue
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
     * @param  QuoteWasSent  $event
     * @return void
     */
    public function handle(QuoteWasSent $event)
    {
        flash()->success('Feedback', 'We will provide a response within 24 hours');

        $when = Carbon::now()->addMinutes(1);

        Mail::to('info@ormrepo.co.uk')
            ->later($when, new QuoteSent($event));
    }
}
