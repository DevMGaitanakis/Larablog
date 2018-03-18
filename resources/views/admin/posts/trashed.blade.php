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
      Recover
    </th>
    <th>
      Permanent Delete
    </th>
  </thead>
  <tbody>

  @if($posts->count() > 0 )
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
      <a href="{{ route('post.restore',['id' => $post->id])}}" class="btn btn-xs btn-success">
       Recover
     </a>
     </td>
     <td>
       <a href="{{ route('post.kill',['id' => $post->id])}}" class="btn btn-xs btn-danger">
        Delete
      </a>
      </td>
    <tr>
  @endforeach
  @else

    <tr>
      <td colspan="5" style="text-align:center"> No Trashed Posts </td>
    </tr>

  @endif

  </tbody>


</table>

@stop
