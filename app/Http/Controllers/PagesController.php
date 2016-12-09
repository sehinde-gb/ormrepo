<?php

    namespace App\Http\Controllers;


    use App\Mail\ContactSent;
    use App\Http\Requests\ContactFormRequest;
    use App\User;

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
         * @return \Illuminate\Http\Response
         */
        public function store(ContactFormRequest $request)
        {

            \Mail::send('emails.contact',
                array(
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'user_message' => $request->get('user_message')
                ), function($message)
                {
                    $message->from('sehinde@ormrepo.net');
                    $message->to('sehinde@ormrepo.net', 'Admin')->subject('TODOParrot Feedback');
                });

            return \Redirect::route('blogs.index')->with('message', 'Thanks for contacting us!');
            /*

            $name = $request->input('name');
            $email = $request->input('email');
            $user_message = $request->get('message');




            \Mail::send('emails.contact', ['name' => $name, 'email' => $email, 'message' => $user_message], function ($message)
            {
                $message->from('sehinde@ormrepo.net', 'Sehinde Raji');
                $message->to('ormrepo@gmail.com');
                $message->subject('Ormrepo Feedback To Do');
            });

            return \Redirect::route('blogs.index')->with('message', 'Thanks for contacting us!');
*/

        }

    }
