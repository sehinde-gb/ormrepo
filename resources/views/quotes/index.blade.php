@extends('layouts.app')

@section('meta-title', 'Get a quote')

@section('content')

    <div class="breadcrumb-container">
        {!! Breadcrumbs::render('quotes.index') !!}
    </div><!-- /.breadcrumb-container -->


    <div class="quotes-container">
        <div class="about-heading is--padded-b50">
            <h12 class="is--beige"><h15 class="is--beige">Get A Quote</h15></h12>

        </div><!-- /.about-heading -->

        <div class="quotations-form">
            @include('partials.errors')

            {!! Form::open(array('route' => 'quotes_store')) !!}
            {!! Form::label('Name', 'Your name (required):', ['class' => 'is--beige is--padded-r10 is--padded-t20']) !!}
            {!! Form::text('name', null, ['class' => 'form']) !!}

            {!! Form::label('Email Address', 'Your email (required):', ['class' => 'is--beige is--padded-r10 is--padded-t20']) !!}
            {!! Form::text('email', null, ['class' => 'form']) !!}

            {!! Form::label('Phone number', 'Phone number:', ['class' => 'is--beige is--padded-r10 is--padded-t20']) !!}
            {!! Form::text('phone', null, ['class' => 'form']) !!}

            {!! Form::label('what_project', 'What is this project about?', ['class' => 'is--beige control is--padded-t20']) !!}
            {!! Form::textarea('what_project', null, ['class' => 'form-control is--padded-l']) !!}

            {!! Form::label('Website', 'What is your current website address?', ['class' => 'is--beige is--padded-r10 is--padded-t20']) !!}
            {!! Form::text('website', null, ['class' => 'form']) !!}

            {!! Form::label('Pages', 'Number of website pages:', ['class' => 'is--beige is--padded-r10 is--padded-t20']) !!}
            {!! Form::text('pages', null, ['class' => 'form']) !!}

            {!! Form::label('your_budget', 'What is your estimated budget?', ['class' => 'is--beige control is--padded-t20']) !!}

           {!!  Form::select('your_budget', ['S' => 'Less than £1000', 'M' => '£1000 - £2000', 'L' => '£2000 - £3000', 'XL' => 'Over £3000' ], null, ['placeholder' => 'Select your estimated budget...']) !!}

            <div class="about-heading is--padded-b50">
                <h12 class="is--beige">Your new website</h12>

            </div><!-- /.about-heading -->

            {!! Form::label('description', 'Describe your new website?', ['class' => 'is--beige control is--padded-t20']) !!}
            <em class="tips">(Examples: clean, modern, user friendly, bold, corporate, fun, forward thinking, innovative, bright, calming, elegant, clean, minimal, etc.)</em>
            <!-- /.tips -->
            {!! Form::textarea('description', null, ['class' => 'form-control is--padded-l']) !!}

            {!! Form::label('functionality', 'Describe the functionality?', ['class' => 'is--beige control is--padded-t20']) !!}
            <em class="tips">(Examples: blog, calendar, search functionality, quote form, e-commerce etc.)</em>
            <!-- /.tips -->
            {!! Form::textarea('functionality', null, ['class' => 'form-control is--padded-l']) !!}

            {!! Form::label('website_list', 'Are there any particular websites that you like? Please list:', ['class' => 'is--beige control is--padded-t15']) !!}
            <em class="tips">(Examples: page elements like headers, menus, sidebars, colors, typography, photos, etc)</em>
            {!! Form::textarea('website_list', null, ['class' => 'form-control is--padded-l is--margin-top10 is--margin-bottom20']) !!}

            <div class="send-container">
                {!! Form::submit('Get Quote', array('class'=>'btn btn-secondary')) !!}
            </div><!-- /.read-container -->
            {!! Form::close() !!}

        </div><!-- /.quotations-form -->

    </div><!-- /.quotes-container -->

@endsection

