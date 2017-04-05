<?php

namespace App\Listeners;

use App\Events\NewsletterWasSubscribed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\AccountApproved;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionNotification
{
    use SerializesModels, InteractsWithQueue;

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
     * @param  NewsletterWasSubscribed  $event
     * @return void
     */
    public function handle(NewsletterWasSubscribed $event)
    {
        $event->notify(new AccountApproved());
    }
}
