@extends('layouts.app')

@section('meta-title', 'Sign In')

@section('content')
    <div class="form-page">
        <div class="login-fluid">
                <div class="logo-container">
                    <div class="own-logo">
                        <img class="bordered-logo"
                             src="/images/logo/logo_small.png"
                             alt="The ormrepo thoughtful logo">
                    </div><!-- /.own-logo -->
                </div><!-- /.logo-container -->
                <div class="header">
                    <h4 class="leader is--black">Sign In</h4>
                </div><!-- /.header -->
                <div class="row">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include ('partials.errors')
                        <div class="form-group form-group-lg">
                            <label for="input1" class="control-label">E-Mail Address</label>
                            <input autofocus id="email" type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div><!-- /.form-group form-group-lg -->
                        <div class="form-group form-group-lg">
                            <ul>

                                <li><label for="input1 password"  class="col-sm-2 control-label">Password</label> <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Password?</a>
                                </li>
                            </ul>
                                <input id="password"
                                       name="password"
                                       class="form-control"
                                       type="password"
                                       value="password"
                                       placeholder="password"
                                       autocomplete="off" >
                        </div><!-- /.form-group form-group-lg -->

                        <p><label><input id="methods" type="checkbox"> Show password</label></p>

                        <div class="button-group">
                            <button type="submit" class="btn btn-secondary">Log In</button>
                        </div><!-- /.button-group -->

                    </form>
                </div><!-- /.row -->
            </div><!-- /.login-fluid -->

    </div><!-- /.form-page -->
@endsection
