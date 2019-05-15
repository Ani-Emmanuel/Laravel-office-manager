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
                    <p class="card-text"><span class="badge badge-info">Firstname</span>&nbsp;&nbsp;{{$staff->firstname}}</p>
                    <p class="card-text"><span class="badge badge-info">Lastname:</span>&nbsp;&nbsp;{{$staff->lastname}}</p>
                    <p class="card-text"><span class="badge badge-info">Email:</span>&nbsp;&nbsp;{{$staff->email}}</p>
                    <p class="card-text"><span class="badge badge-info">phone Number:</span>&nbsp;&nbsp;{{$staff->phone}}</p>
                    <p class="card-text"><span class="badge badge-info">Role:</span>&nbsp;&nbsp;{{$staff->select}}</p>
                    <a href="/staff/delete/{{$staff->id}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection