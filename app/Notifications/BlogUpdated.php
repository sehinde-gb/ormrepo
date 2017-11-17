<?php

namespace App\Notifications;

use App\Blog;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

/**
 * Class BlogUpdated
 * @package App\Notifications
 */
class BlogUpdated extends Notification implements ShouldQueue
{
    use Queueable;
    /**
     * @var User
     */
    public $user;
    /**
     * @var Blog
     */
    public $blog;


    /**
     * BlogUpdated constructor.
     * @param User $user
     * @param Blog $blog
     */
    public function __construct(User $user, Blog $blog)
    {

        $this->user = $user;
        $this->blog = $blog;
    }

    /**
     * @param $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }


    /**
     * @param $notifiable
     * @return $this
     */
    public function toSlack($notifiable)
    {
        $blog = $this->blog;

        return (new SlackMessage)
            ->content('Your ormrepo post has been updated ', $this->user->name)
            ->attachment(function ($attachment) use ($blog) {
                $attachment->title($blog->title, route('admin.blogs.show', $blog->id));
            });
    }
}
