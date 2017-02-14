<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;



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
        return [OneSignalChannel::class];
    }

    public function toOneSignal($notifiable)
    {
        return OneSignalMessage::create()
            ->subject("Your {$notifiable->service} blog post was published!")
            ->body("Click here to see details.")
            ->url('http://onesignal.com')
            ->webButton(
                OneSignalWebButton::create('link-1')
                    ->text('Click here')
                    ->icon('https://ormrepo.co.uk/images/ormrepo-tiny.png')
                    ->url('http://ormrepo.co.uk')
            );
    }
}


