@extends('layout.index')

@section('content')
<form class="form-tag" action="{{route('register')}}" method="POST">
      @csrf


      <div class="content ">
        <div class="head m-b-md">
            <h2>Register</h2>
        </div>

    <div class="form-group justify-content-center">
    {{-- <label for="email">Email:</label> --}}
    <input type="email" class="form-control" placeholder="Enter email id" id="email" name="email" value="{{old('email')}}">

    @error('email')
    <div style="font-size:13px;color:red;">
        {{$message}}
    </div>
    @enderror
    </div>

  <div class="form-group justify-content-center">
    {{-- <label for="name">Username:</label> --}}
    <input type="text" class="form-control" placeholder="Enter Username" id="name" name="name" value="{{old('name')}}">

    @error('name')
    <div style="font-size:13px;color:red;">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="form-group">
    {{-- <label for="password">Password:</label> --}}
    <input type="password" class="form-control" placeholder="Enter password" id="password" name="password">

    @error('password')
    <div style="font-size:13px;color:red;">
      {{$message}}
    </div>
    @enderror

  </div>

  <div class="form-group">
    {{-- <label for="password_confirmed">Confirm Password:</label> --}}
    <input type="password" class="form-control" placeholder="Confirm password" id="password_confirmation" name="password_confirmation">

    @error('password_confirmed')
    <div style="font-size:13px;color:red;">
      {{$message}}
    </div>
    @enderror

  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form> 

@endsection
