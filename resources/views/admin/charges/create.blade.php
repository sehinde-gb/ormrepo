@extends('layouts.app')

@section('meta-title', 'Transport, Blockchain Infrastructure | Ormrepo | Create a New Charge ')

@section('content')

{!! Breadcrumbs::render('admin.charges.create') !!}
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
            <h4 class="leader is--black">Create a Service Charge</h4>
        </div><!-- /.header -->


        <div class="row">
            @role('admin')
                {!! Form::open(array('route' => 'admin.charges.store', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true)) !!}
                @include('partials.errors')

                @include('admin.charges.form', ['submitButtonText' => 'Publish Charge'])
                {!! Form::close() !!}
            @endrole
        </div><!-- /.row -->
    </div><!-- /.register-fluid -->

</div><!-- /.form-page -->
@endsection



