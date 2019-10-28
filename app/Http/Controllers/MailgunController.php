<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailgunController extends Controller
{
    /**
     * A method to gather webhook data from mailgun regarding
     * mail opens.
     *
     * @param Request $request
     */
    public function info(Request $request)
    {
        dd($request->all());
    }

    /**
     * A method to gather webhook data from mailgun regarding
     * unsubscribes.
     *
     * @param Request $request
     */
    public function unsubscribe(Request $request)
    {
        dd($request->all());
    }

    /**
     * A method to gather webhook data from mailgun regarding
     * Spam complaints.
     *
     * @param Request $request
     */
    public function complaints(Request $request)
    {
        dd($request->all());
    }
}
