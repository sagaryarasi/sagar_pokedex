@extends('master')

@section('content')
    <div class="row">
      <div class="col-md-12">
        <br/>
        <h3 align="center">Add New Pokemon</h3>
        <p align="center">If you think you have a new Pokemon that is not in our list, please add the new pokemon with all its details here.<br/>
        But please make sure that you thoroughly go through our list before adding.</p>
        <br/>
        @if(count($errors) > 0)
         <div class="alert alert-danger">
           <ul>
             @foreach($errors->all() as $error)
              <li>{{$error}}</li>
             @endforeach
           </ul>
        @endif
        @if(\Session::has('success'))
         <div class="alert alert-success">
           <p>{{\Session::get('success') }}</p>
        </div>
        @endif
        <form method="post" action="{{url('pokemo')}}">
           {{csrf_field()}}
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter the Name of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="types" class="form-control" placeholder="Enter the types of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="height" class="form-control" placeholder="Enter the Height of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="weight" class="form-control" placeholder="Enter the Weight of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="abilities" class="form-control" placeholder="Enter the Abilities of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="egg_group" class="form-control" placeholder="Enter the Egg Groups of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="stats" class="form-control" placeholder="Enter the Stats of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="genus" class="form-control" placeholder="Enter the Genus of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Enter the Description of New Pokemon"/>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary"/>
          </div>
        </form>
@endsection
