@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb heading">
        
            <h2 align="center ">Add New User</h2>
        
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
@endif

<form  name="createform" id="createform" action="{{ route('store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email" required data-parsley-type="email" data-parsley-trigger="keyup">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input class="form-control" type="password" name="password" id="password" placeholder="***********" required data-parsley-length="[5,10]" data-parsley-trigger="keyup">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Confirm Password:</strong>
                <input class="form-control" type="password" name="cnf_password" id="cnf_password" placeholder="***********" required data-parsley-equalto=" #password" data-parsley-trigger="keyup">
            </div>
        </div>
        <div class="col-sm-2 lftbtn">
            <a class="btn btn-primary back" href="{{ route('successlogin') }}"> Back</a>
        </div>
        <div class="col-sm-3  text-right rtnbtn">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   <script>
       $(document).ready(function(){
            $('#createform').parsley();
       });
   </script>
</form>
@endsection