@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-12 row">
    <h1>Staff Registration</h1>
    <hr>
  </div>
  {{-- Form For registering staff --}}
<div class="row col-sm-8 col-lg-8">
<form action="/staff/edit" method="POST">
<input type="hidden" name="_method" value="put">
<input type="hidden" name="id" value="{{$staffEdit->id}}">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="firstname">FirstName</label>
        <input type="text" 
            class="form-control" 
            id="firstname" 
            name="firstname"
            value="{{$staffEdit->firstname}}"
            placeholder="Enter Firstname"
        >
  </div>
  <div class="form-group">
        <label for="lastname">Lastname</label>
        <input 
            type="text" 
            class="form-control" 
            id="lastname" 
            name="lastname"
            value="{{$staffEdit->lastname}}"
            placeholder="Enter Lastname"
        >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
        <input type="email" 
            class="form-control" 
            id="exampleInputEmail1" 
            aria-describedby="emailHelp" 
            name="email"
            value="{{$staffEdit->email}}"
            placeholder="Enter email"
        >
  </div>
   <div class="form-group">
    <label for="phone-number">Phone Number</label>
        <input type="number" 
            class="form-control" 
            id="role" 
            name="phone" 
            min="5" 
           
            value="{{$staffEdit->phone}}"
            placeholder="Enter Phone Number"
        >
  </div>
   <div class="form-group">
    <label for="role">Select Role</label><br>
    <select name="select">
      <option value="system Admin">System Admin</option>
      <option value="Programmer">Programmer</option>
      <option value="Code Analyst">Code Analyst</option>
      <option value="Web Developer">Web Developer</option>
      <option value="Hacker">Hacker</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@endsection