<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;


/**
 * Class BlogPublished
 * @package App\Notifications
 */
class BlogPublished extends Notification
{

    /**
     * @param $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        //return [TwitterChannel::class];
    }

    /**
     * @param $notifiable
     * @return TwitterStatusUpdate
     */
    public function toTwitter($notifiable) {

        //return new TwitterStatusUpdate($blog->title .' https://ormrepo.co.uk/'. $blog->uri);

    }
}


