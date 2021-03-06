@extends('admin.master')

@section( 'content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>

      </tr>
    </thead>

    <tbody>
      
        @foreach($datas as $key=>$inf)
        <tr>
            <th scope="row">#</th>
            <td>{{ $inf->customers->customer_name }}</td>
            <td>{{ $inf->quantity }}</td>
            <td>{{ $inf->startdate }}</td>
            <td>{{ $inf->enddate  }}</td>  
          

          </tr>
            
        @endforeach



        <tr>
          <td><h1> Total sale is {{ $sum }} </h1></td>
        </tr>


        


    
        
    </tbody>
  </table>


@endsection
