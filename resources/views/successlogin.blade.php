@extends('layout.app')

@section('content')
<div>
  <p>You have successfully Logged in.</p>
</div>
@if(isset(Auth::user()->email))
 <div class="alert alert-danger success-block">
   <strong>Welcome {{Auth::user()->name}}</strong>
   <br/>
   <a href="{{url('/main/logout')}}">Logout</a>
 </div>
  @else

  <script>window.location="/main";</script>

@endif
@endsection
