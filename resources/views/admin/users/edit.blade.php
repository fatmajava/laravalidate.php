@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center">Edit user</h1>
    <form method="post" action="{{ route('users.update' , $user->id) }}">
        @csrf
        @method('PUT') 
        <div class="mb-3">
          <label  class="form-label">User name</label>
          <input type="text" class="form-control" name="name" value="{{ $user->name }}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="mb-3">
          <label  class="form-label">Password</label>
          <input type="password" class="form-control" name="password" >
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection