
@extends('layout')
@section('content')

		@if(isset (Auth::user()->email))
		<div class="row">
			<div class="col-sm-9 heading">
				<h3 align="left" >Welcome!</h3>
			</div>
			<div class="col-sm-3 ctnbtn">
              <a class="btn btn-success" href="{{ url('/main/create') }}"> Create New User</a>
          	</div>
        </div>
			<br>
			<div class="alert alert-success success-block"> 
					<strong>{{ Auth::user()->name  }}</strong> <br>
					<strong>{{ Auth::user()->email  }}</strong> 				
			</div>

			
    	<div class="row">
			
          	<div class=" lftbtn">
          	    <a class="btn btn-info" href="{{ route('show') }}">List Users</a>
			</div>			
			<br>
			<div class=" rtnbtn">
				<a class="btn btn-danger" href="{{ url('/main/logout') }}">Logout</a>
			</div>
		</div>
		@else
			<script >
				window.location="/main";
			</script>
		@endif
	
@endsection