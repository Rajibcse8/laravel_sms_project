@extends('admin.master')
@section( 'content')

<form action="{{ route('sellreport.store')  }}" method="POST">
    @csrf

    <select name="name" id="">
        <option value="">select customer</option>
        @foreach($names as $name)
             
          <option value="{{ $name->id }}">{{ $name->customer_name }}</option>
        @endforeach
    </select>

    <input type="date" name="startdate" id="" >
    <input type="date" name="enddate" id=""  >
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection

@yield('contetnt2')
