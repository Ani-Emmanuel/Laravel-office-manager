@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col-sm-12">
          <h1>Staff Details</h1>  
        </div>
        <div class="row col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Staff Details</h4>
                    <p class="card-text"><span class="badge badge-info">Firstname</span>&nbsp;&nbsp;<br>{{$dept->name}}</p>
                    <p class="card-text"><span class="badge badge-info">Lastname:</span>&nbsp;&nbsp;<br>{{$dept->discription}}</p>
                    <a href="/staff/delete/{{$dept->id}}" class="card-link">Delete</a>
                    <div id="assign" class="form-group" style="display:none">
                        <form method="put" action="/department/edit">
                            <select name="department">
                                @foreach ($staff as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    {{-- <button type="submit" class="btn btn-primary float-md-left" >Assign to Department</button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection


