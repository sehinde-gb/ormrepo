@extends('layouts.master')

@section('meta-title', $blog->title)

@section('content')
    <div class="breadcrumb-container">
        {!! Breadcrumbs::render('admin.blogs.edit', $blog) !!}
    </div><!-- /.breadcrumb-container -->

    <div class="form-page">

        <div class="register-fluid">
               <div class="header">
                   <h2 class="leader is--black">Edit Blog</h2>
               </div><!-- /.header -->
                    <div class="row">


                            {!! Form::model($blog, array('route' => array('admin.blogs.update', $blog->id), 'method' => 'PUT')) !!}
                                    @include('admin.blogs.form', ['submitButtonText' => 'Update'])
                            {!! Form::close() !!}


                            @cannot('update', $blog)
                                <p class="is--white">Sorry you are not permitted to update a post</p>
                            @endcannot


                    </div><!-- /.row -->

                    <div class="row">
                        @can('delete', $blog)

                            {!! Form::open([ 'method' => 'DELETE', 'route' => ['admin.blogs.destroy', $blog->id]]) !!}

                           {!! delete_form(['admin.blogs.destroy', $blog->id]) !!}

                           {!! Form::close() !!}
                        @endcan

                            @cannot('delete', $blog)
                                <p class="is--white">Sorry you are not permitted to delete a post</p>
                            @endcannot

                    </div><!-- /.row -->


           </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->

@endsection

