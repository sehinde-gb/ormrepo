@extends('layouts.app')

@section('meta-title', $blog->title)

@section('content')

    <div class="form-page">
        <div class="logo-container">
            <div class="own-logo">
                <img class="bordered-logo"
                     src="/images/logo_small.png"
                     alt="The ormrepo thoughtful logo">
            </div><!-- /.own-logo -->
        </div><!-- /.logo-container -->

        <div class="sign-container">
           <div class="register-fluid">
               <div class="header">
                   <h4 class="leader is--black">Edit Post</h4>
               </div><!-- /.header -->
               @is('admin')
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
               @else
                   <br>
                   <h3 class="is--black is--centre">'We are sorry, you do not have the required permissions to edit this blog'</h3>
                   <br>
               @endis

           </div><!-- /.register-fluid -->
        </div><!-- /.sign-container -->
    </div><!-- /.form-page -->

@endsection

