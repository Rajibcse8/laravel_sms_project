@extends('admin.master')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Customer name</th>
        <th scope="col">Customer address</th>
        <th scope="col">Customer status </th>
        <th scope="col">Customer created By</th>

      </tr>
    </thead>

    <tbody>
 
       @foreach($customers as $key=> $inf)
        <tr>
            <th scope="row">#</th>
            <td>{{ $inf->customer_name }}</td>
            <td>{{ $inf->customer_address }}</td>
            <td>{{ $inf->status }}</td>
            <td>{{ $inf->creater_customer_id }}</td>
        </tr>
            
        @endforeach
        
    </tbody>
  </table>


@endsection