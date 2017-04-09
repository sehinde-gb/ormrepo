<?php

namespace App\Http\Controllers;

use App\Exceptions\SubscriptionNotFoundException;
use App\Http\Requests\EmailRequest;
use App\Notifications\SubscriptionApproved;
use Illuminate\Support\Facades\Auth;
use Newsletter;

class SubscribeUserController extends Controller
{
    /**
     * Grabs the email address and subscribes the email to
     * the update newsletter.
     *
     * @param EmailRequest $request
     * @return string
     * @throws SubscriptionNotFoundException
     */
    public function store(EmailRequest $request)
    {
        try {

            $email = $request->input('email');

            Newsletter::subscribe($email);

            $user = Auth::user();

            $user->notify(new SubscriptionApproved($email));

        } catch (SubscriptionNotFoundException $e) {

            throw new SubscriptionNotFoundException($e->getMessage());
        }

         return redirect()->route('admin.blogs.index');

    }

}
