@extends('layouts.app')

@section('content')

<table class="table table-hover">
  <thead>
    <th>
      Categoty Name
    </th>
    <th>
      Editing
    </th>
    <th>
      Deleting
    </th>
  </thead>
  <tbody>

    @foreach($subcategories as $subcategory)
    <tr>
      <td> {{$subcategory->name}} </td>
      <td>
         <a href="{{ route('subcategory.edit',['id' => $subcategory->id])}}" class="btn btn-xs btn-info">
           <span class="glyphicon glyphicon-pencil"> </span>
         </a>
      </td>
      <td>
        <a href="{{ route('subcategory.delete',['id' => $subcategory->id])}}" class="btn btn-xs btn-danger">
         <span class="glyphicon glyphicon-trash"> </span>
       </a>
       </td>
      <tr>
    @endforeach

  </tbody>


</table>

@stop
