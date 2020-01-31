@extends('layout')

@section('content')
		<h3 align="center">Login Forum</h3><br>

		@if(isset(Auth::user()->email))
			<script>
				window.location="/main/successlogin";
			</script>
		@endif

		@if ($message = Session::get('error') )
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert">x</button>
				<strong>{{ $message }}</strong>
			</div>
		@endif

		@if(count($errors)>0)

			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="post" action="{{ url('/main/checklogin') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label><b>Enter Email</label>
				<input type="email" name="email" class="form-control"/>
			</div>
			<div class="form-group">
				<label>Enter Password</label>
				<input type="password" name="password" class="form-control"/>
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-primary" value="Login" />
			</div>
		</form>
	</div>
@endsection