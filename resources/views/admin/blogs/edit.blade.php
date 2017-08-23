@extends('layouts.app')

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


                    </div><!-- /.row -->

                    <div class="row">

                           {!! Form::open([ 'method' => 'DELETE', 'route' => ['admin.blogs.destroy', $blog->id]]) !!}

                           {!! delete_form(['admin.blogs.destroy', $blog->id]) !!}

                           {!! Form::close() !!}


                    </div><!-- /.row -->


           </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->

@endsection

