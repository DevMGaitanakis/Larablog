@extends('layouts.app')

@section('content')

<table class="table table-hover">
  <thead>
    <th>
      Tag Name
    </th>
    <th>
      Editing
    </th>
    <th>
      Deleting
    </th>
  </thead>
  <tbody>

    @foreach($tags as $tag)
    <tr>
      <td> {{$tag->tag}} </td>
      <td>
         <a href="{{ route('tag.edit',['id' => $tag->id])}}" class="btn btn-xs btn-info">
           <span class="glyphicon glyphicon-pencil"> </span>
         </a>
      </td>
      <td>
        <a href="{{ route('tag.delete',['id' => $tag->id])}}" class="btn btn-xs btn-danger">
         <span class="glyphicon glyphicon-trash"> </span>
       </a>
       </td>
      <tr>
    @endforeach

  </tbody>


</table>

@stop
