@extends('layouts.app')

@section('meta-title', $title)

@section('content')

    <div class="form-page">
        <div class="logo-container">
            <div class="own-logo">
                <img class="logo"
                     srcset="/images/logo_medium.png 1080w,
                        /images/logo_small.png 760w"
                     alt="The ormrepo thoughtful logo">
            </div><!-- /.own-logo -->
        </div><!-- /.logo-container -->

        <div class="sign-container">
            <div class="register-fluid">
                <div class="header">
                    <h4 class="leader is--black">Create a Post</h4>
                </div><!-- /.header -->

                @is('admin')
                    <div class="row">
                        {!! Form::model($blog = new \App\Blog,  ['files'=>true, 'url' => 'admin/blogs']) !!}
                            @include('admin.blogs.form', ['submitButtonText' => 'Publish Post'])
                        {!! Form::close() !!}
                    </div><!-- /.row -->
                @else
                    <br>
                    <h3 class="is--black is--centre">'We are sorry, you do not have the required permissions to edit this blog'</h3>
                    <br>
                @endis
            </div><!-- /.register-fluid -->
        </div><!-- /.sign__container -->
    </div><!-- /.form-page -->
@endsection

