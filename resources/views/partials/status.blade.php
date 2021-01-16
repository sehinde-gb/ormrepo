@if (session()->has('status'))
<alert type="success" timeout="1000">{{ session('status') }}</alert>
@endif

