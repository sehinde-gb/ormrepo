<?php

namespace App\Http\Controllers;

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
     */
    public function store(EmailRequest $request)
    {
        $email = $request->input('email');

        //dd($email);

        Newsletter::subscribe($email);

        return redirect()->route('blogs.index');

    }



}
