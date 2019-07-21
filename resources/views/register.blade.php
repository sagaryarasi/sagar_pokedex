@extends('master')

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
  @foreach($errors->all() as $error)
    <li>{{$error}}</li>
  @endforeach
  </ul>
</div>
@endif
   <form action="{{url('/store')}}" method="post">
     {{ csrf_field() }}
      <div class="form-group">
       <label>Enter Name</label>
       <input type="text" name="name" class="form-control"/>
     </div>
     <div class="form-group">
       <label>Enter Email</label>
       <input type="email" name="email" class="form-control"/>
     </div>
      <div class="form-group">
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
      <div class="form-group">
        <input type="submit" name="sign" class="btn btn-primary" value="Sign Up"/>
      </div>
 </form>
@endsection
