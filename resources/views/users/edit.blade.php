@extends('layouts.app')
@section('content')

<form method="POST" action="/users/{{$user->id}}">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name">Name</label>
      <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="oldPassword">Old password</label>
        <input name="oldPassword" type="password" class="form-control" id="oldPassword" placeholder="Password...">
    </div>
    <div class="form-group">
        <label for="newPassword">New password</label>
        <input name="newPassword" type="password" class="form-control" id="newPassword" placeholder="New password...">
    </div>
    <div>
        <button type="submit" class="btn btn-primary mt-3">Edit</button>
        <a class="align-bottom" href="/users">Back</a>
    </div>
  </form>

@endsection