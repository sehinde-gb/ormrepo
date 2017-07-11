@extends('layouts.app')

@section('meta-title', 'Contact Us')

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('contact') !!}
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
                    <h4 class="leader is--black">Contact Us</h4>
                </div><!-- /.header -->


                <div class="row">
                    {!! Form::open(array('route' => 'contact_store')) !!}

                    @include('partials.errors')

                    <div class="form-group form-group-lg">
                        {!! Form::label('Your Name', 'Your Name:', ['class' => 'control-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>

                    <div class="form-group form-group-lg">
                        {!! Form::label('Your Email Address', 'Email Address:', ['class' => 'control-label']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email Address']) !!}
                    </div>

                    <div class="form-group form-group-lg">
                        {!! Form::label('user_message', 'Message:', ['class' => 'control-label']) !!}
                        {!! Form::textarea('user_message', null, ['class' => 'form-control', 'placeholder' => 'Your Message']) !!}
                    </div>

                    <div class="button-centre">
                        {!! Form::submit('Contact Us!', array('class'=>'btn btn-secondary')) !!}
                    </div>
                    {!! Form::close() !!}
                </div><!-- /.row -->
            </div><!-- /.register-fluid -->

    </div><!-- /.form-page -->
@endsection
