@extends('layouts.app')
@section('content')
<div class="container">
    <x-header title="ADD NEW CUSTOMER" />
        <div class="card-body">
            @include('messages')
          <form method="POST" action="/customers">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror value="{{old('name')}}">
                @error('name')
                <span class="text-danger">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
                <div class="mb-3">

                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror value="{{old('email')}}">
                @error('email')
                <span class="text-danger">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
                <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" @error('phone') is-invalid @enderror value="{{old('phone')}}">
                @error('phone')
                <span class="text-danger">
                    <strong>
                        {{$message}}
                    </strong>
                </span>
                @enderror
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-success">Create-User</button>
          </form>
      </div>
</div>
@endsection
