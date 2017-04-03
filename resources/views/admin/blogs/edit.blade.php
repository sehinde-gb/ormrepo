@extends('layouts.app')

@section('meta-title', $blog->title)

@section('content')

    <div class="form-page">
        <div class="register-fluid">
               <div class="logo-container">
                   <div class="own-logo">
                       <img class="logo"
                            srcset="/images/logo_medium.png 1080w,
                        /images/logo_small.png 760w"
                            alt="The ormrepo thoughtful logo">
                   </div><!-- /.own-logo -->
               </div><!-- /.logo-container -->

               <div class="header">
                   <h4 class="leader is--black">Edit Post</h4>
               </div><!-- /.header -->

                    <div class="row">
                       {!! Form::model($blog, array('route' => array('blogs.update', $blog->id), 'method' => 'PUT')) !!}
                            @include('admin.blogs.form', ['submitButtonText' => 'Update'])
                        {!! Form::close() !!}
                    </div><!-- /.row -->

                    <div class="row">

                       {!! Form::open([ 'method' => 'DELETE', 'route' => ['blogs.destroy', $blog->id]]) !!}

                       {!! delete_form(['blogs.destroy', $blog->id]) !!}

                       {!! Form::close() !!}
                    </div><!-- /.row -->


           </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->

@endsection

