@extends('layouts.app')

@section('meta-title', $blog->title)

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
                   <h4 class="leader is--black">Edit Blog</h4>
               </div><!-- /.header -->

                    <div class="row">
                        @can('update', $blog)
                           {!! Form::model($blog, array('route' => array('blogs.update', $blog->id), 'method' => 'PUT')) !!}
                                @include('admin.blogs.form', ['submitButtonText' => 'Update'])
                            {!! Form::close() !!}
                        @endcan

                        @cannot('update', $blog)
                                <h3 class="is--black is--centre">You do not have the required permissions to update this blog post</h3>
                        @endcannot

                    </div><!-- /.row -->

                    <div class="row">
                        @can('delete', $blog)
                           {!! Form::open([ 'method' => 'DELETE', 'route' => ['blogs.destroy', $blog->id]]) !!}

                           {!! delete_form(['blogs.destroy', $blog->id]) !!}

                           {!! Form::close() !!}
                       @endcan

                    </div><!-- /.row -->


           </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->

@endsection

