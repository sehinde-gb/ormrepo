<?php

namespace App\Listeners;

use App\Events\BlogWasCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendPublishedNotification implements ShouldQueue
{
    use SerializesModels, InteractsWithQueue;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  BlogWasCreated $event
     * @return void
     */
    public function handle(BlogWasCreated $event)
    {
        flash()->success('Blog Published', 'Your post has been published');
    }
}
