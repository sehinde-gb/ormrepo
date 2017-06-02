@extends('layouts.app')

@section('meta-title', 'Edit your Charge')

@section('content')

<div class="form-page">

    <div class="register-fluid">
        <div class="header">
            <h4 class="leader is--black">Edit {{ $charge->name }}</h4>
        </div><!-- /.header -->

    @include('partials.errors')

    <div class="row">
        {!! Form::model($charge, ['route' => ['admin.charges.update', $charge->id], 'method' => 'PUT', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true]) !!}
        {!! Form::hidden('id') !!}

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
            </div>

            <!-- Price -->
            <div class="form-group form-group-lg">
                {!! Form::label('price', 'Price in £', ['class' => 'control-label']) !!}
                <div class="input-group">
                    {!! Form::text('price', null, array('required', 'class'=>'form-control', 'placeholder'=>'9.99')) !!}
                </div>
            </div>

            <!-- Image -->
            <div class="form-group form-group-lg">
                {!! Form::label('image', 'Image (.png)', ['class' => 'control-label']) !!}
                {!! Form::file('image', null, array('required', 'class'=>'form-control')) !!}
            </div>


            <div class="form-group form-group-lg">
                {!! Form::submit('Update', array('class'=>'btn btn-secondary')) !!}
                {!! delete_form(['admin.charges.destroy', $charge->id]) !!}
                {!! Form::close() !!}
            </div>
        </div><!-- /.row -->
    </div><!-- /.register-fluid -->
</div><!-- /.form-page -->

@endsection