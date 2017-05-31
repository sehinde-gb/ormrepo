@extends('layouts.app')

@section('meta-title', 'Create a new listing')

@section('content')

    @include('partials.errors')

    {!! Form::open(array('route' => 'admin.charges.store', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true)) !!}

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


    <div class="form-group form-group-lg">
        {!! Form::label('sku', 'SKU', ['class' => 'control-label']) !!}
        {!! Form::text('sku', null, array('required', 'class'=>'form-control', 'placeholder'=>'PSN-1234')) !!}
    </div>

    <div class="form-group form-group-lg">
        {!! Form::label('price', 'Price in £', ['class' => 'control-label']) !!}
        <div class="input-group">
            {!! Form::text('price', null, array('required', 'class'=>'form-control', 'placeholder'=>'9.99')) !!}
        </div>
    </div>

    <div class="form-group form-group-lg">
        {!! Form::label('image', 'Image (.png)', ['class' => 'control-label']) !!}
        {!! Form::file('image', null, array('required', 'class'=>'form-control')) !!}
    </div>




    <div class="button-centre">
        {!! Form::submit('Create Charge', array('class'=>'btn btn-primary')) !!}
    </div><!-- /.button-centre -->


    {!! Form::close() !!}
@endsection



