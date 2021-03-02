@extends('admin.master')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Amount</th>
        <th scope="col">Quantity</th>
        <th scope="col">Type</th>
        <th scope="col">Purchased_BY</th>

      </tr>
    </thead>

    <tbody>
     
        @foreach($purchases as $key=>$inf)
        <tr>
            <th scope="row">#</th>
            <td>{{ $inf->purchase_amount }}</td>
            <td>{{ $inf->purchase_quantity }}</td>
            <td>{{ $inf->purchase_type }}</td>
            <td>{{ $inf->user->name  }}</td>
          </tr>
            
        @endforeach
        
    </tbody>
  </table>


@endsection