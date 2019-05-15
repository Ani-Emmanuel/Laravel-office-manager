@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-12 row">
    <h1>Staff Roaster</h1>
    <hr>
  </div>
  {{-- Form For registering staff --}}
<div class="row col-sm-9 col-lg-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Role</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($staff as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->firstname}}</td>
        <td>{{$item->lastname}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}
        <td>{{$item->select}}</td>
        <th scope="row"><a href="/staff/show/{{$item->id}}">View</a></th>
        <th scope="row"><a href="/staff/edit/{{$item->id}}">Edit</a></th>
        <th scope="row">
        <a href="{{$item->id}}"
              onclick="var result = confirm('Are you sure you want to delete this product');
              if(result){
                event.preventDefault();
                document.getElementById('delete').submit();
              }">
              Delete
              </a>
              <form id="delete" method="post" action="/staff/delete/{{$item->id}}" style="display:none;">
              {{csrf_field()}}
              <input type="hidden" name="_method" value="delete">
              </form>
              </th>
    </tr>
    @endforeach
  </tbody>
    </table>
</div>
</div>
@endsection