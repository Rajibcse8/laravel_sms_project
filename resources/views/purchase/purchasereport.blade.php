@extends('admin.master')
@section( 'content')

<form action="{{  route('report.store')  }}" method="POST">
    @csrf

    <input type="date" name="startdate" id="" required>
    <input type="date" name="enddate" id=""  required>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection