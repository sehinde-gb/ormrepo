@extends('layouts.app')

@section('meta-title', $title)

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('admin.blogs.create') !!}
</div><!-- /.breadcrumb-container -->

    <div class="form-page">
        <div class="register-fluid">

                <div class="header">
                    <h2 class="leader is--black">Publish Blog</h2>
                </div><!-- /.header -->
                <div class="row">
                    @can('create')
                        {!! Form::model($blog = new \App\Blog,  ['files'=>true, 'url' => 'admin/blogs']) !!}
                            @include('admin.blogs.form', ['submitButtonText' => 'Publish Blog'])
                        {!! Form::close() !!}
                    @endcan

                        @cannot('create')
                            <p class="is--white">Sorry you are not permitted to create a post</p>
                        @endcannot
                </div><!-- /.row -->

            </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->
@endsection

