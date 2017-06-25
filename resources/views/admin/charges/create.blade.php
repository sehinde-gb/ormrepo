@extends('layouts.app')

@section('meta-title', 'Create a new charge')

@section('content')

<div class="form-page">

    <div class="register-fluid">

        @include('partials.errors')

        <div class="row">
            {!! Form::open(array('route' => 'admin.charges.store', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true)) !!}
            <div class="header">
                <h4 class="leader is--black">Create a Charge</h4>
            </div><!-- /.header -->


            <!-- Name -->
            <div class="form-group form-group-lg">
                {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div><!-- /.form-group -->

            <!-- Description -->
            <div class="form-group form-group-lg">
                {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                {!! Form::text('description', null, ['class' => 'form-control']) !!}
            </div><!-- /.form-group -->

            <!-- SKU -->
            <div class="form-group form-group-lg">
                {!! Form::label('sku', 'SKU', ['class' => 'control-label']) !!}
                {!! Form::text('sku', null, array('required', 'class'=>'form-control', 'placeholder'=>'PSN-1234')) !!}
            </div><!-- /.form-group -->

            <!-- Price -->
            <div class="form-group form-group-lg">
                {!! Form::label('price', 'Price in £', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('price', null, array('required', 'class'=>'form-control', 'placeholder'=>'9.99')) !!}
                </div>
            </div><!-- /.form-group -->

            <!-- Image -->
            <div class="form-group form-group-lg">
                {!! Form::label('image', 'Image (.png)', ['class' => 'control-label']) !!}
                {!! Form::file('image', null, array('required', 'class'=>'form-control')) !!}
            </div><!-- /.form-group -->


            <div class="button-centre">
                {!! Form::submit('Create Charge', array('class'=>'btn btn-secondary')) !!}
            </div><!-- /.button-centre -->

            {!! Form::close() !!}
        </div><!-- /.row -->
    </div><!-- /.register-fluid -->

</div><!-- /.form-page -->
@endsection



