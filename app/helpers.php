<?php

    use Illuminate\Support\Facades\Auth;

    function errors_for($errors, $attribute)
    {
        return $errors->first('<span class="error">:message</span>', $attribute );
    }

    function link_to_profile($text = 'Profile')
    {
        return link_to_route('profile', $text, Auth::user()->username);
    }

    function delete_form($routeParams, $label = 'Delete')
    {
        $form = Form::open(['method' => 'DELETE', 'route' => $routeParams]);

        $form .= Form::submit($label, ['class' => 'btn btn-danger']);

        return $form .= Form::close();
    }




