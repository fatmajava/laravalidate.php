@extends('layouts.admin')

@section('content')
<h1 class="text-center" > {{ $role->name}}</h1>
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User name</th>
        <th scope="col">Email</th>
        <th scope="col">Created_at</th>
        <th scope="col">Control</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($role_users as$user )
            
      
      <tr>
        <th scope="row">1</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td class="d-flex">
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info">show</a>
            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Edit</a>
            {{-- <a href="" class="btn btn-danger">Delete</a> --}}
            <form method="post" action="{{ route('users.destroy', $user->id) }}">
              @csrf
              @method('DELETE')
              <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
      </tr>
      
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>

</div>
@endsection