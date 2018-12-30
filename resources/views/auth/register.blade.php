@extends('layouts.app')

@section('meta-title', 'Learn Blockchain  | Public Transport | Inclusion and Diversity | Register ')

@section('content')

    <div class="form-page">
        <div class="register-fluid">

                <div class="header">
                    <h2 class="leader is--black">Register</h2>
                </div><!-- /.header -->


                <div class="row">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include ('partials.errors')
                        <div class="form-group form-group-lg">
                            <label for="input1" class="control-label">Username</label>
                            <input autofocus id="username" type="text" name="username" class="form-control" value="{{ old('username') }}">
                        </div><!-- /.form-group form-group-lg -->


                        <div class="form-group form-group-lg">
                            <label for="input1" class="control-label">Name</label>
                            <input autofocus id="name" type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div><!-- /.form-group form-group-lg -->

                        <div class="form-group form-group-lg">
                            <label for="input1" class="control-label">E-Mail Address</label>
                            <input autofocus id="email" type="email
" name="email" class="form-auth" value="{{ old('email') }}">
                        </div><!-- /.form-group form-group-lg -->

                        <div class="form-group form-group-lg">
                            <label for="input1 password"  class="control-label">Password</label>
                                <input id="password"
                                       class="form-control"
                                       type="password"
                                       value="123"
                                       name="password"
                                       placeholder="password">


                            <p><label><input id="methods" type="checkbox"> Show password</label></p>
                        </div><!-- /.form-group form-group-lg -->

                        <div class="form-group form-group-lg">
                            <label for="input1 password_confirmation"  class="control-label">Confirm Password</label>
                            <p>
                                <input id="password_confirmation"
                                       class="form-control"
                                       type="password"
                                       value="123"
                                       name="password_confirmation"
                                       placeholder="Confirm password">
                            </p>

                        </div><!-- /.form-group form-group-lg -->

                        <div class="button-group">
                            <button type="submit" class="btn btn-secondary">Register</button>
                        </div><!-- /.button-group -->
                    </form>
                </div><!-- /.row -->
            </div><!-- /.register-fluid -->


    </div><!-- /.form-page -->

@endsection
