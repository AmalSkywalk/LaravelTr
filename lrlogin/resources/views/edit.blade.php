@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="heading">
                <h2 align="center">Edit User</h2>
            </div>
            
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
  
    <form id="editform" name="editform" action="{{ route('update',$user->id) }}" method="POST">
        @csrf
        
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
            
                <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input class="form-control" type="email" name="email" value="{{$user->email}}" required data-parsley-type="email" data-parsley-trigger="keyup">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Password:</strong>
                <input class="form-control" type="password" name="password" value="{{$user->password}}" required data-parsley-length="[5,10]" data-parsley-trigger="keyup">
            </div>
        </div>
        <div class="back lftbtn">
                <a class="btn btn-primary" href="{{ route('show') }}"> Cancel</a>
            </div>
        <div class="submit rtnbtn">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
   <script>
       $(document).ready(function(){
            $('#editform').parsley();
       });
   </script>
    </form>
@endsection