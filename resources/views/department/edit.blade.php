@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-12 row">
    <h1>Staff Registration</h1>
    <hr>
  </div>
  {{-- Form For registering staff --}}
<div class="row col-sm-8 col-lg-8">
<form action="/department/store" method="POST">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="firstname">Department Name</label>
        <input type="text" 
            class="form-control" 
            id="firstname" 
            name="name"
            value="{{$editDept->name}}"
            placeholder="Enter Firstname"
        >
  </div>
  <div class="form-group">
        <label for="discription">Discription</label>
        <textarea 
        name="discription" 
        id="discription" 
  cols="10" rows="5" class="form-control">{{$editDept->discription}}</textarea>
  </div>


{{--   
   <div class="form-group">
    <label for="role">Select Staff</label><br>
    <select name="select" class="form-control">
        <option value="">Select a Staff</option>
         @if (count($user)>0)
            @foreach ($user as $item)
                <option value={{$item->id}}>{{$item->firstname}}</option>
            @endforeach 
         @endif
    </select>
  </div> --}}

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection