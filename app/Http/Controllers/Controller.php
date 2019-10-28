<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * The authenticated user.
     *
     * @var \App\User| null
     */
    protected $signedIn;
    /**
     * Is the user signed in ?
     *
     * @var \App\User| null
     */
    public $user;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->user = $this->signedIn = Auth::user();
    }
}
