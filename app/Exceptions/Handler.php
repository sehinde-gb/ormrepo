<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
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

        if ($e instanceof BlogNotFoundException) {
            return response(view('errors.402'), 402);

            return parent::render($request, $e);
        }

        if ($e instanceof QueryNotFoundException) {
            return response(view('errors.403'), 403);

            return parent::render($request, $e);
        }

        if ($e instanceof RSSNotFoundException) {
            return response(view('errors.404'), 404);

            return parent::render($request, $e);
        }

        if ($e instanceof SlugNotFoundException) {
            return response(view('errors.405'), 405);

            return parent::render($request, $e);
        }

        if ($e instanceof SubscriptionNotFoundException) {
            return response(view('errors.406'), 406);

            return parent::render($request, $e);
        }

        if ($e instanceof TagNotFoundException) {
            return response(view('errors.407'), 407);

            return parent::render($request, $e);
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
