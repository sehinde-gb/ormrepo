@extends('layouts.app')

@section('meta-title', $blog->title)

@section('content')
    <div class="breadcrumb-container">
        {!! Breadcrumbs::render('admin.blogs.edit', $blog) !!}
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
                   <h4 class="leader is--black">Edit Blog</h4>
               </div><!-- /.header -->

                    <div class="row">



                            {!! Form::model($blog, array('route' => array('admin.blogs.update', $blog->id), 'method' => 'PUT')) !!}
                                    @include('admin.blogs.form', ['submitButtonText' => 'Update'])
                            {!! Form::close() !!}

                       

                    </div><!-- /.row -->

                    <div class="row">
                        @role('admin')
                           {!! Form::open([ 'method' => 'DELETE', 'route' => ['admin.blogs.destroy', $blog->id]]) !!}

                           {!! delete_form(['admin.blogs.destroy', $blog->id]) !!}

                           {!! Form::close() !!}
                       @endrole

                    </div><!-- /.row -->


           </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->

@endsection

