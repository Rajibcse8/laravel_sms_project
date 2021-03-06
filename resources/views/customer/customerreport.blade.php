@extends('admin.master')
@section( 'content')

<form action="{{  route('customerreport.store')  }}" method="POST">
    @csrf


    <div class="form-control" >
        <label for="Creater"> 
             Crearter name:    
        </label>
        <select name="name" id="">

            <option value="">select user name</option>
               
            @foreach($user as $key => $name)
            <option value="{{$name->id }}">{{ $name->name }}</option>
                
            @endforeach
            
        </select>
    </div>

    <input type="date" name="startdate" id="" >
    <input type="date" name="enddate" id=""  >
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection