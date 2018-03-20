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
      Create New Sub Category
    </div>

<div class="panel-body">
    <form action="{{route('subcategory.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="Category">Category</label>
         <select name="category_id" id="category" class="form-control">
           @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
         </select>
      </div>

      <div class="form-group">
         <label for="name">Name</label>
         <input type="text" name="name" class="form-control">
      </div>

      <div class="form-group">
         <div class="text-center">
           <button class="btn btn-success" type="submit">Store SubCategory</button>
         </div>
      </div>

    </form>

  </div>
</div>

@stop
