@extends('layouts.app')
@section('content')
<x-header title="SHOW ALL CUSTOMER" />
<div class="container">
    <div class="card col-6 offset-3">
        Name: <h5 class="card-header">{{$customer->name}}</h5>
        <div class="card-body">
         Email: <h5 class="card-title">{{$customer->email}}</h5>
         Phone no: <p class="card-text">{{$customer->phone}}</p>
                  </div>
      </div>
</div>
@endsection
