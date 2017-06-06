<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
        'App\Events\BlogWasCreated' => [
            'App\Listeners\SendPublishedNotification',
        ],
        'App\Events\BlogWasUpdated' => [
            'App\Listeners\SendUpdateNotification',
        ],

        'App\Events\ContactWasSent' => [
            'App\Listeners\SendContactConfirmation'
        ],


    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
