@extends('layout.index')

@section('content')
<form style="margin: 20px 20px 20px 20px; width: 340px;
    margin: 50px auto;
  	font-size: 15px;">
  <div class="form-group justify-content-center">
    
   
   <h1>Successfully Registered!!!!</h1>
   <a href="{{route('login')}}">click here to login</a>
  </div>


</form> 

@endsection
