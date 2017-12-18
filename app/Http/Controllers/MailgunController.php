<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailgunController extends Controller
{
    /**
     * @param Request $request
     */
    public function info(Request $request)
    {
        dd($request->all());
    }

    /**
     * @param Request $request
     */
    public function unsubscribe(Request $request)
    {
        dd($request->all());
    }

}
