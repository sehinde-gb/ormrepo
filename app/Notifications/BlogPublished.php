<?php

namespace App\Notifications;

use App\Blog;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;




class BlogPublished extends Notification implements ShouldQueue
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
     * BlogPublished constructor.
     * @param User $user
     * @param Blog $blog
     */
    public function __construct(User $user, Blog $blog)
    {

        $this->user = $user;
        $this->blog = $blog;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @param $notifiable
     * @return $this
     */
    public function toSlack($notifiable)
    {
        $blog = $this->blog;

        return (new SlackMessage)
            ->content('A new ormrepo post was published ', $this->user->name)
            ->attachment(function ($attachment) use ($blog) {
                $attachment->title($blog->title, route('admin.blogs.show', $blog->id));
            });

    }



}


