<?php

    use Illuminate\Support\Facades\Auth;

    /**
     * Shows the error message bag using a span
     *
     * @param $errors
     * @param $attribute
     * @return mixed
     */
function errors_for($errors, $attribute)
{
    return $errors->first('<span class="error">:message</span>', $attribute);
}

    /**
     * Shows a link to the profile page.
     * @param string $text
     * @return string
     */
function link_to_profile($text = 'Profile')
{
    return link_to_route('profile', $text, Auth::user()->username);
}

    /**
     * Opens the delete form and adds the button danger this points to the delete model
     * method.
     * @param $routeParams
     * @param string $label
     * @return string
     */
function delete_form($routeParams, $label = 'Delete')
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

    $form .= Form::submit($label, ['class' => 'btn btn-danger']);

    return $form .= Form::close();
}


    /**
     * Assigns the flash function to the flash method.
     *
     * @param null $title
     * @param null $message
     * @return \Illuminate\Foundation\Application|mixed
     */
function flash($title = null, $message = null)
{
    $flash = app(\App\Http\Flash::class);

    if (func_num_args() == 0) {
        return $flash;
    }

    return $flash->info($title, $message);
}
