<?php

namespace App\Notifications;


use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;
use NotificationChannels\OneSignal\OneSignalWebButton;
use Illuminate\Notifications\Notification;

/**
 * Class AccountApproved
 * @package App\Notifications
 */
class AccountApproved extends Notification
{
    /**
     * Add the onesignal channel ready for broadcast.
     *
     * @param $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [OneSignalChannel::class];
    }


    /**
     * Returns a customised message using the onesignal API.
     *
     *
     * @param $notifiable
     * @return $this
     */
    public function toOneSignal($notifiable)
    {
        return OneSignalMessage::create()
            ->subject("Your {$notifiable->service} account was approved!")
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

