<?php

namespace App\Http\Controllers;

use App\Events\ContactWasSent;
use App\Http\Requests\ContactFormRequest;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }



    /**
     * Show the page for the portfolio
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function portfolio()
    {

        return view('pages.portfolio');
    }

    /**
     * Show the page for a booking
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function bookings()
    {
        return view('pages.bookings');
    }

    /**
     * Show the page for privacy
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Show the page for the cookie policy
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cookie()
    {
        return view('pages.cookie');
    }

    /**
     * Show the page for the terms and conditions policy
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function terms()
    {
        return view('pages.terms');
    }

    /**
     * Show the page for the youtube videos
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function diversecodertv()
    {
        return view('pages.diversecodertv');
    }
}
