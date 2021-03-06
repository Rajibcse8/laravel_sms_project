@extends('admin.master')
@section( 'content')

<form action="{{ route('sell.store') }}" method="POST">

    @csrf
  
      <div class="mb-3">
        <Select name="name">
          @foreach($nameid as  $namei)

          <option name="" value="{{ $namei->id }}">{{ $namei->customer_name}}</option>
            
          @endforeach
          
        </Select>
      </div>
  
      <div class="mb-3">
          <input type="number" name="quantity" class="form-control" id="address"   placeholder="Enter quantity" required>
      </div>
      <div class="mb-3">
          <label for="">Srart Date :</label>
        <input type="date" name="startdate" class="form-control" id="address"   placeholder="" required>
    </div>
    <div class="mb-3">
        <label for=""> End Date: </label>
        <input type="date" name="enddate" class="form-control" id="address"   placeholder="Enter customer_address" required>
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