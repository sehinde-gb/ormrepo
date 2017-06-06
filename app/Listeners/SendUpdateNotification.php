<?php

namespace App\Listeners;

use App\Events\BlogWasUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\BlogUpdated;
use Illuminate\Queue\SerializesModels;

class SendUpdateNotification implements ShouldQueue
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
     * @param  BlogWasUpdated  $event
     * @return void
     */
    public function handle(BlogWasUpdated $event)
    {
        flash()->success('Blog Updated', 'Your post has been updated');
        $event->user->notify(new BlogUpdated($event->user));
    }
}
