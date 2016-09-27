@if (Session::has('info'))
<div class="alert alert-info" role="alert">
    {{ Session::get('info') }}
</div>
@elseif (Session::has('error'))
<div class="alert alert-danger" role="alert">
    {{ Session::get('error') }}
</div>
@endif
