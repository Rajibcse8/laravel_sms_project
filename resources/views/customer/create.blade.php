@extends('admin.master')

@section( 'content')

					
 <form action="{{ route('customer.store') }}" method="POST">

  @csrf

    <div class="mb-3">
      <input type="text" name="customer_name" class="form-control" id="name"  placeholder="Enter customer_name" required>
    </div>

    <div class="mb-3">
        <input type="text" name="customer_address" class="form-control" id="address"   placeholder="Enter customer_address" required>
    </div>

    
    

      <div class="mb-3">
        <select name="status" id="">
          <option value="1">1</option>
          <option value="0">0</option>
        </select required>
      </div>

      
     
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection