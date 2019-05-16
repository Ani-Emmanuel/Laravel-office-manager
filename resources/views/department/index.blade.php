@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-12 row">
    <h1>Department Roaster</h1>
    <hr>
  </div>
  {{-- Form For registering staff --}}
<div class="row col-sm-9 col-lg-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Discription</th>
      <th scope="col">Number of staff</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($department as $item)
    <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->discription}}</td>
        @for ($i = 0; $i < $count; $i++)
            <td>{{$item->name}}</td>
        @endfor
        <th scope="row"><a href="/department/show/{{$item->id}}">View</a></th>
        <th scope="row"><a href="/department/edit/{{$item->id}}">Edit</a></th>
        <th scope="row">
        <a href="{{$item->id}}"
              onclick="var result = confirm('Are you sure you want to delete this product');
              if(result){
                event.preventDefault();
                document.getElementById('delete').submit();
              }">
              Delete
              </a>
              <form id="delete" method="post" action="/department/delete/{{$item->id}}" style="display:none;">
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