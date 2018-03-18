@extends('layouts.app')

@section('content')

<table class="table table-hover">
  <thead>
    <th>
      User Avatar
    </th>
    <th>
      User Name
    </th>
    <th>
      Permissions
    </th>
    <th>
      Delete
    </th>
  </thead>
  <tbody>
    @if($users->count() > 0)
    @foreach($users as $user)
    <tr>
      <td> <img src="{{asset($user->profile->avatar)}}" alt="" width="50px" height="50px"> </td>
      <td>
        {{$user->name}}
      </td>
      <td>
        @if($user->admin)
        <a href="{{route('user.admin.remove',['id' => $user->id])}}" class="btn btn-xs btn-danger">  Remove Administration </a>
        @else
        <a href="{{route('user.admin.add',['id' => $user->id])}}" class="btn btn-xs btn-success">  Make Admin </a>
        @endif

       </td>
       <td>
         <a href="{{ route('user.delete',['id' => $user->id])}}" class="btn btn-xs btn-danger">
           Delete
         </a>
       </td>
      <tr>
    @endforeach
@else

<tr>
<td colspan="4" class="text-align:center"> No Users </td>
</tr>

@endif
  </tbody>


</table>

@stop
