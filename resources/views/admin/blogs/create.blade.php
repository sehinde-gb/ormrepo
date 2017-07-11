@extends('layouts.app')

@section('meta-title', $title)

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('admin.blogs.create') !!}
</div><!-- /.breadcrumb-container -->

    <div class="form-page">
        <div class="register-fluid">
                <div class="logo-container">
                    <div class="own-logo">
                        <img class="bordered-logo"
                             src="/images/logo/logo_small.png"
                             alt="The ormrepo thoughtful logo">
                    </div><!-- /.own-logo -->
                </div><!-- /.logo-container -->
                <div class="header">
                    <h4 class="leader is--black">Publish Blog</h4>
                </div><!-- /.header -->
                <div class="row">
                    {!! Form::model($blog = new \App\Blog,  ['files'=>true, 'url' => 'admin/blogs']) !!}
                        @include('admin.blogs.form', ['submitButtonText' => 'Publish Blog'])
                    {!! Form::close() !!}

                </div><!-- /.row -->

            </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->
@endsection

