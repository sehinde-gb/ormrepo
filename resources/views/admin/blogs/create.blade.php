@extends('layouts.app')

@section('meta-title', $title)

@section('content')

    <div class="form-page">
        <div class="register-fluid">
                <div class="logo-container">
                    <div class="own-logo">
                        <img class="bordered-logo"
                             src="/images/logo_small.png"
                             alt="The ormrepo thoughtful logo">
                    </div><!-- /.own-logo -->
                </div><!-- /.logo-container -->
                <div class="header">
                    <h4 class="leader is--black">Create a Post</h4>
                </div><!-- /.header -->


                    <div class="row">
                        @role('admin')
                            {!! Form::model($blog = new \App\Blog,  ['files'=>true, 'url' => 'admin/blogs']) !!}
                                @include('admin.blogs.form', ['submitButtonText' => 'Publish Post'])
                            {!! Form::close() !!}
                        @else
                            <p class="is--black">You do not have permission to create a new blog post</p>
                        @endrole

                    </div><!-- /.row -->

            </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->
@endsection

