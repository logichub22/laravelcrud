@extends('layouts.app')
@section('content')
<x-header title="ACTION " />
<div class="container">
    @include('messages')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            {{-- <th scope="col">Email</th>
            <th scope="col">Phone</th> --}}
          </tr>
        </thead>

        <tbody>
            @foreach ($customers as $customer)
          <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            {{-- <td>{{$customer->email}}</td>
            <td>{{$customer->phone}}</td> --}}
            <td>
                <form action="/customers/{{$customer->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a href="/customers/{{$customer->id}}" class="btn btn-success">view</a>
                    <a href="/customers/{{$customer->id}}/edit" class="btn btn-success">Edite</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>

@endsection
