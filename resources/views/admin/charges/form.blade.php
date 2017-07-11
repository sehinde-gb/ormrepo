@include('partials.errors')

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

<!-- Type -->
<div class="form-group form-group-lg">
    {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div><!-- /.form-group -->

<!-- SEO -->
<div class="form-group form-group-lg">
    {!! Form::label('seo', 'SEO:', ['class' => 'control-label']) !!}
    {!! Form::text('seo', null, ['class' => 'form-control']) !!}
</div><!-- /.form-group -->

<!-- Features -->
<div class="form-group form-group-lg">
    {!! Form::label('features', 'Features:', ['class' => 'control-label']) !!}
    {!! Form::text('features', null, ['class' => 'form-control']) !!}
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



    {!! Form::submit($submitButtonText, ['class' => 'btn btn-secondary', 'data-confirm' => 'Are you sure about that?']) !!}

