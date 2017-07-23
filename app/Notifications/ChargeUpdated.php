<?php

namespace App\Notifications;

use App\Charge;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\SlackMessage;

class ChargeUpdated extends Notification implements ShouldQueue
{
    use Queueable;
    /**
     * @var User
     */
    public $user;
    /**
     * @var Charge
     */
    public $charge;

    /**
     * Create a new notification instance.
     *
     * @param User $user
     * @param Charge $charge
     */
    public function __construct(User $user, Charge $charge)
    {

        $this->user = $user;
        $this->charge = $charge;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
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
        $charge = $this->charge;

        return (new SlackMessage)
            ->content('Your charge was updated: ', $this->user->name)
            ->attachment(function ($attachment) use ($charge) {
                $attachment->title($charge->name, route('admin.charges.show', $charge->id));
            });

    }


}
