<?php

namespace App\Http\Controllers;

use App\Events\QuoteWasSent;
use App\Http\Requests\QuoteRequest;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('quotes.index');
    }


    /**
     * Grab the data from the message form and send it to the
     * Web Administrator.
     *
     * @param QuoteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuoteRequest $request)
    {

        $data = $request->all();

        event(new QuoteWasSent($data));

        return redirect('/');
    }
}
