<?php

namespace App\Exceptions;

use Exception;
use HttpException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
            AuthenticationException::class,
            AuthorizationException::class,
            HttpException::class,
            ModelNotFoundException::class,
            TokenMismatchException::class,
            ValidationException::class,

    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param Exception $exception
     * @return void
     *
     *
     */
    public function report(Exception $exception)
    {
        if ($this->shouldReport($exception)) {

        }
        return parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);

        if ($exception instanceof MethodNotFoundException) {
            return response(view('errors.403'), 403);

            return parent::render($request, $exception);
        }


        if ($exception instanceof HttpNotFoundException) {
            return response(view('errors.404'), 404);

            return parent::render($request, $exception);
        }

        if ($exception instanceof MethodNotAllowedException) {
            return response(view('errors.405'), 405);

            return parent::render($request, $exception);
        }


        if ($e instanceof ChargeNotFoundException) {
            return response(view('errors.422'), 422);

            return parent::render($request, $exception);
        }



    }



    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest('login');
    }
}
