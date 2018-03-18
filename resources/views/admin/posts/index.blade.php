@extends('layouts.app')

@section('content')

<table class="table table-hover">
  <thead>
    <th>
      Post Image
    </th>
    <th>
      Post Title
    </th>
    <th>
      Editing
    </th>
    <th>
      Deleting
    </th>
  </thead>
  <tbody>

    @foreach($posts as $post)
    <tr>
      <td> <img src="{{$post->featured}}" alt="" style="width:90px; height:50px;"> </td>
      <td> {{$post->title}} </td>
      <td>
         <a href="{{ route('post.edit',['id' => $post->id])}}" class="btn btn-xs btn-info">
           <span class="glyphicon glyphicon-pencil"> </span>
         </a>
      </td>
      <td>
        <a href="{{ route('post.delete',['id' => $post->id])}}" class="btn btn-xs btn-danger">
         <span class="glyphicon glyphicon-trash"> </span>
       </a>
       </td>
      <tr>
    @endforeach

  </tbody>


</table>

@stop
