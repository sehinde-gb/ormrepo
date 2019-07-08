<?php

namespace App\Http\Controllers;

use App\Events\ContactWasSent;
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


    public function logistics()
    {
        return view('homes.logistics');
     }
}
