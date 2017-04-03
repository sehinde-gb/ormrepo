<?php

    /*
    * Authenticate the user's personal channel...
    */

    use Illuminate\Support\Facades\Broadcast;

    Broadcast::channel('App.User.{userId}', function ($user, $userId) {
        return (int) $user->id === (int) $userId;
    });