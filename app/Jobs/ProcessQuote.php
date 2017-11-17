<?php

namespace App\Jobs;

use App\Mail\QuoteSent;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessQuote implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var QuoteSent
     */
   protected $quoteSent;

    /**
     * Create a new job instance.
     *
     * @param QuoteSent $quoteSent
     */
    public function __construct(QuoteSent $quoteSent)
    {

        $this->quoteSent = $quoteSent;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
    }
}
