

@if(Session::has('success'))
<div class="note note-success note-bordered">
	<p>{{ Session('success') }}</p>
</div>
@endif



@if(Session::has('danger'))
<div class="alert alert-danger">
	<p>{{ Session('danger') }}</p>
</div>
@endif