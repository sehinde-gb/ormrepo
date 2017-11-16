<?php

namespace App\Mail;

use App\Http\Requests\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuoteSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @param QuoteRequest $request
     * @return $this
     */
    public function build(QuoteRequest $request)
    {
        return $this->markdown('emails.quote')

            ->with([

                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'what_project' => $request->get('what_project'),
                'website' => $request->get('website'),
                'pages' => $request->get('pages'),
                'your_budget' => $request->get('your_budget'),
                'description' => $request->get('description'),
                'functionality' => $request->get('functionality'),
                'website_list' => $request->get('website_list'),

            ])
            ->from(['email' => $request->get('email')]);
    }
}
