@extends('layouts.master')

@section('meta-title', $title)

@section('content')

<div class="breadcrumb-container">
    
</div><!-- /.breadcrumb-container -->

    <div class="form-page">
        <div class="register-fluid">

                <div class="header">
                    <h2 class="leader is--black">Publish Blog</h2>
                </div><!-- /.header -->
                <div class="row">
                    {!! Form::model($blog = new \App\Blog,  ['files'=>true, 'url' => 'admin/blogs']) !!}
                    @include('admin.blogs.form', ['submitButtonText' => 'Publish Blog'])
                    {!! Form::close() !!}

                </div><!-- /.row -->

            </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->
@endsection

