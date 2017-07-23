@include('partials.errors')

<!-- Title -->
<div class="form-group form-group-lg">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div><!-- /.form-group -->

<!-- Excerpt -->
<div class="form-group form-group-lg">
    {!! Form::label('series', 'Series:', ['class' => 'control-label']) !!}
    {!! Form::text('series', null, ['class' => 'form-control']) !!}
</div><!-- /.form-group -->

<!-- Body Form Input -->
<div class="form-group form-group-lg">
    {!! Form::label('Body', 'Body:', ['class' => 'control-label']) !!}
    {!! Form::textarea('body', null, ['class' => 'form-control summernote','placeholder'=>'Content', 'id' => 'summernote']) !!}
</div><!-- /.form-group -->

<!-- Published_at Form Input -->
<div class="form-group form-group-lg">
    {!! Form::label('published_at', 'Publish On:', ['class' => 'control-label']) !!}
    {!! Form::input('date','published_at', $blog->published_at, ['class' => 'form-control']) !!}
</div><!-- /.form-group -->

<!-- Category -->
<div class="form-group form-group-lg">
    {!! Form::label('category_list', 'Category:', ['class' => 'control-label']) !!}
    {!! Form::select('category_list[]', $categories, null, ['id' => 'category_list','class' => 'form-control', 'multiple']) !!}
</div><!-- /.form-group -->

<div class="button-centre">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-secondary', 'data-confirm' => 'Are you sure about that?']) !!}
</div><!-- /.form-group -->


<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>



