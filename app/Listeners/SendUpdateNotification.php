<?php

namespace App\Listeners;

use App\Events\BlogWasUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;

class SendUpdateNotification implements ShouldQueue
{
    use SerializesModels;

    /**
     * Create the event listener.
     *
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  BlogWasUpdated $event
     * @return void
     * @internal param $user
     * @internal param $blog
     */
    public function handle(BlogWasUpdated $event)
    {
        flash()->success('Blog Updated', 'Your post has been updated');
    }
}
