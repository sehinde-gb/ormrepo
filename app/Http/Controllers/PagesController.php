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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view ('pages.about');
    }

    /**
     * Show the page for privacy
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function privacy()
    {
        return view ('pages.privacy');
    }

    /**
     * Show the page for the cookie policy
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cookie()
    {
        return view ('pages.cookie');
    }

    /**
     * Show the page for the terms and conditions policy
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function terms()
    {
        return view ('pages.terms');
    }

    /**
     * Show the page to make a booking
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function book()
    {
        return view ('pages.book');

    }


    /**
     * Show the form contacting us.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.contact');

    }

    /**
     * Grab the data from the message form and send it to the
     * Web Administrator.
     *
     * @param ContactFormRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactFormRequest $request)
    {

        $data = $request->all();

        event(new ContactWasSent());

        return redirect('/');

    }

}
