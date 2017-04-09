@extends('layouts.app')

@section('meta-title', $title)

@section('content')

    <div class="form-page">
        <div class="register-fluid">
                <div class="logo-container">
                    <div class="own-logo">
                    <img class="logo"
                             srcset="/images/logo_medium.png 1080w,
                        /images/logo_small.png 760w" alt="The ormrepo thoughtful logo">
                    </div><!-- /.own-logo -->
                </div><!-- /.logo-container -->
                <div class="header">
                    <h4 class="leader is--black">Create a Post</h4>
                </div><!-- /.header -->


                    <div class="row">
                        {!! Form::model($blog = new \App\Blog,  ['files'=>true, 'url' => 'admin/blogs']) !!}
                            @include('admin.blogs.form', ['submitButtonText' => 'Publish Post'])
                        {!! Form::close() !!}
                    </div><!-- /.row -->

            </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->
@endsection

