@extends('layouts.app')

@section('content')

  @if(count($errors) > 0 )
    <ul class="list-group">
      @foreach ($errors->all() as $error)
      <li class="list-group-item text-danger">{{$error}}</li>
      @endforeach
    </ul>
    @endif
  <div class="panel panel-default">
    <div class="panel-heading">
      Update Category {{$subcategory->name}}
    </div>

<div class="panel-body">
    <form action="{{route('subcategory.update',['id'=>$subcategory->id])}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group">
         <label for="name">Name</label>
         <input type="text" name="name" value="{{$subcategory->name}}"class="form-control">
      </div>

      <div class="form-group">
         <div class="text-center">
           <button class="btn btn-success" type="submit">Store Category</button>
         </div>
      </div>

    </form>

  </div>
</div>

@stop
