<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\HomeFormRequest;
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
     * @param HomeFormRequest $request
     * @return $this
     */
    public function build(HomeFormRequest $request)
    {
        return $this->view('emails.contact')

            ->with([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('user_message')
            ])
            ->from(['email' => $request->get('email')]);
    }
}
