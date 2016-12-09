<li>

    <p>{{ $comment->owner->name }} said..</p>

    <div class="body">
        {!! $comment->body !!}
    </div>

    @if(Auth::check())
        @include('admin.comments.form', ['parentId' => $comment->id])
    @endif

    @if (isset($comments[$comment->id]))

        @include('admin.comments.list', ['collection' => $comments[$comment->id]])

    @endif


</li>

