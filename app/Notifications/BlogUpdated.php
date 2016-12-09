<?php

namespace App\Notifications;

use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;
use Illuminate\Notifications\Notification;

/**
 * Class BlogUpdated
 * @package App\Notifications
 */
class BlogUpdated extends Notification
{


    /**
     * @param $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [OneSignalChannel::class];
    }


    /**
     * @param $notifiable
     * @return $this
     */
    public function toOneSignal($notifiable)
    {
        return OneSignalMessage::create()
            ->subject("Your {$notifiable->service} blog was updated!")
            ->body("Click here to see details.")
            ->url('http://onesignal.com')
            ->webButton(
                OneSignalWebButton::create('link-1')
                    ->text('Click here')
                    ->icon('https://upload.wikimedia.org/wikipedia/commons/4/4f/Laravel_logo.png')
                    ->url('http://laravel.com')
            );
    }
}
