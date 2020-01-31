@extends('layout')

@section('content')
	
		@if(isset (Auth::user()->email))
			<h3 align="center">Welcome!</h3><br>
			<div class="alert alert-success success-block"> 
					<strong>{{ Auth::user()->name  }}</strong> <br>
					<strong>{{ Auth::user()->email  }}</strong> 				
			</div>

	@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
			<strong>{{ $message }}</strong>
        </div>
    @endif
			<div class="pull-right">
              <a class="btn btn-success" href="{{ url('/main/create') }}"> Create New User</a>
            

            <a class="btn btn-info" href="{{ route('show') }}">List Users</a>

			</div>
			<br>
			<a class="btn btn-danger pull-right" href="{{ url('/main/logout') }}">Logout</a>
		@else
			<script >
				window.location="/main";
			</script>
		@endif
	</div>
@endsection