<?php

namespace App\Http\Controllers;

use App\Exceptions\SubscriptionNotFoundException;
use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;
use Newsletter;


class SubscriptionsController extends Controller
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

            //dd($email);

            Newsletter::subscribe($email);

        } catch (SubscriptionNotFoundException $e) {

            throw new SubscriptionNotFoundException($e->getMessage());
        }

        return redirect()->route('blogs.index');

    }



}
