@extends('layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
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
  
    <form action="{{ route('update',$user->id) }}" method="POST">
        @csrf
        
   
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email:</strong>
                <input class="form-control" type="email" name="email" placeholder="email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>password:</strong>
                <input class="form-control" type="password" name="password" placeholder="password">
            </div>
        </div>
        <div class="pull-left"style="float: left;margin-left:10%;">
                <a class="btn btn-primary" href="{{ route('show') }}"> Back</a>
            </div>
        <div class=""style="float:right; margin-left:20%; ">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
   
    </form>
@endsection