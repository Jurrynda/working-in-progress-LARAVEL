@extends('layouts.app')
@section('content')

<form method="POST">
    <div class="form-group">
      <label for="name">Name</label>
      <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input name="name" type="email" class="form-control" id="email" value="{{ $user->email }}">
    </div>
    {{-- <div class="form-group">
        <label for="exampleInputEmail1">Old password</label>
        <input type="password" class="form-control" id="oldPassword" aria-describedby="emailHelp" placeholder="Password...">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">New password</label>
        <input type="password" class="form-control" id="oldPassword" aria-describedby="emailHelp" placeholder="New password...">
    </div> --}}
    <div>
        <button type="submit" class="btn btn-primary mt-3">Edit</button>
        <a class="align-bottom" href="/users">Back</a>
    </div>
  </form>

@endsection