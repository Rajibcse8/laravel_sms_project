@extends('admin.master')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Status</th>
        <th scope="col">Created_BY</th>

      </tr>
    </thead>

    <tbody>
       @if(count($datas))
        @foreach($datas as $key=>$inf)
        <tr>
            <th scope="row">#</th>
            <td>{{ $inf->customer_name }}</td>
            <td>{{ $inf->customer_address }}</td>
            <td>{{ $inf->status }}</td>
            <td>{{ $inf->user->name  }}</td>   
            

          </tr>
            
        @endforeach

        @else
        <p>No data found</p>
        @endif
        
    </tbody>
  </table>


@endsection