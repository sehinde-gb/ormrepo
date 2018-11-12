@extends('layouts.app')

@section('meta-title', 'Transport, Blockchain Infrastructure | Ormrepo | Edit Your Charge ')

@section('content')

<div class="breadcrumb-container">
    {!! Breadcrumbs::render('admin.charges.edit', $charge) !!}
</div><!-- /.breadcrumb-container -->

    <div class="form-page">
        <div class="register-fluid">
            <div class="header">
                <h4 class="leader is--black">Edit {{ $charge->name }}</h4>
            </div><!-- /.header -->

            <div class="row">
                @role('admin')
                    {!! Form::model($charge, ['route' => ['admin.charges.update', $charge->id], 'method' => 'PUT', 'class' => 'form', 'novalidate' => 'novalidate', 'files' => true]) !!}
                    {!! Form::hidden('id') !!}
                    @include('partials.errors')
                    @include('admin.charges.form', ['submitButtonText' => 'Update'])
                    {!! Form::close() !!}
                @endrole
            </div>
                <div class="row">
                    @role('admin')
                        {!! Form::open([ 'method' => 'DELETE', 'route' => ['admin.charges.destroy', $charge->id]]) !!}
                        {!! delete_form(['admin.charges.destroy', $charge->id]) !!}
                        {!! Form::close() !!}
                    @endrole
                </div><!-- /.form-group form-group-lg -->
            </div><!-- /.row -->
        </div><!-- /.register-fluid -->
    </div><!-- /.form-page -->

@endsection