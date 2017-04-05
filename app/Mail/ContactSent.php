<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSent extends Mailable
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
     * @param ContactFormRequest $request
     * @return $this
     */
    public function build(ContactFormRequest $request)
    {
        return $this->view('emails.contact.contact')

            ->with([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'body_message' => $request->get('message')
            ])
            ->from(['email' => $request->get('email')]);
    }
}
