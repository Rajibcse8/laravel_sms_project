@extends('admin.master')

@section('content')

	

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Customer name</th>
        <th scope="col">SMS Quantuty</th>
        <th scope="col">Start Date </th>
        <th scope="col">End Date </th>
        <th scope="col">Seller Name</th>
        <th scope="col">Seller Status</th>
        
        

      </tr>
    </thead>

    <tbody>
 
       @foreach($sellers as $key=> $inf)
        <tr>
            <th scope="row">#</th>
            <td>{{ $inf->customers->customer_name }}</td>
            <td>{{ $inf->quantity }}</td>
            <td>{{ $inf->startdate }}</td>
            <td>{{ $inf->enddate }}</td>
            <td>{{ $inf->user->name }}</td>
            <td>{{ $inf->customers->status }}</td>
            
        </tr>
            
        @endforeach
        
    </tbody>
  </table>


@endsection

