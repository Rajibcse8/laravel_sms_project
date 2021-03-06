@extends('admin.master')

@section( 'content')

<div class="card" style="width: 50%;">
    
    <div class="card-body">
     
      <h1 class="card-text">{{ $id }}</h1>
      <a href="{{ url('dashboard') }}" class="btn btn-primary">Go to dashboard</a>
    </div>
  </div>
        
   


@endsection