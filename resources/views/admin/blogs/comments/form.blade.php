<form method="POST" action="/admin/blogs/{{ $blog->id }}/comments">
    {{ csrf_field() }}

    @if (isset($parentId))
        <input name="parent_id" type="hidden" value="{{ $parentId }}"/>
    @endif

    <textarea wrap="off" name="body" required></textarea><br>


    <button class="btn-small" type="submit">Reply</button>
</form>