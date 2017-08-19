<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeFormRequest;
use Illuminate\Http\Request;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('homes.index');
    }

    /**
     * Grab the data from the message form and send it to the
     * Web Administrator.
     *
     * @param HomeFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeFormRequest $request)
    {

        $data = $request->all();

        //event(new ContactWasSent());

        return redirect('/');

    }
}
