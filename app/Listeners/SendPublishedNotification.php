<?php

namespace App\Listeners;

use App\Events\BlogWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\BlogPublished;

class SendPublishedNotification
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
     * @param  BlogWasCreated  $event
     * @return void
     */
    public function handle(BlogWasCreated $event)
    {

        $event->user->notify(new BlogPublished($event->user));
    }
}
