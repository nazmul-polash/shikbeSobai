@if( $massage = Session::get('success') )
	<div class="alert alert-success mass-success">
		<p>{{ $massage }}</p>
	</div>
@endif

@if( $massage = Session::get('danger') )
	<div class="alert alert-danger mass-danger">
		<p>{{ $massage }}</p>
	</div>
@endif

@if( $massage = Session::get('info') )
	<div class="alert alert-info mass-info">
		<p>{{ $massage }}</p>
	</div>
@endif