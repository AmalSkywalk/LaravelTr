@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
                <h2 align="center"> List of Users</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
            
            
        </div>
    </div>
   
    <div class="row">
        <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="280px">Action</th>
        </tr>
      @foreach ($users as $user) 
        <tr>
            <td>{{ ++$i}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('destroy',$user->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('edit',$user->id) }}">Edit</a>
   
                    @csrf
                    
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr> 
     @endforeach

   </table>
   <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('successlogin') }}"> Back</a>
            </div>  
    </div>
@endsection