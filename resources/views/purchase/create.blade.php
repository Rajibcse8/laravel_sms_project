@extends('admin.master')

@section( 'content')

    
 <form action="{{ route('purchase.store') }}" method="POST">

  @csrf

    <div class="mb-3">
      <input type="integer" name="amount" class="form-control" id="amount"  placeholder="Enter Amoumnt" required>
    </div>

    <div class="mb-3">
        <input type="integer" name="quantity" class="form-control" id="purchase"   placeholder="Enter Quantity" required>
    </div>

      <div class="mb-3">
        <select name="Purchase_type" id="cars">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select required>
      </div>

     
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection