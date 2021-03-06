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
        <th scope="col">Creted_at</th>

      </tr>
    </thead>

    <tbody>
       @if(count($datas))
        @foreach($datas as $key=>$inf)
        <tr>
            <th scope="row">#</th>
            <td>{{ $inf->purchase_amount }}</td>
            <td>{{ $inf->purchase_quantity }}</td>
            <td>{{ $inf->purchase_type }}</td>
            <td>{{ $inf->user->name  }}</td>   
            <td>{{ $inf->date(created_at)  }}</td>

          </tr>
            
        @endforeach
      
        @endif

        
        
    </tbody>
  </table>


@endsection