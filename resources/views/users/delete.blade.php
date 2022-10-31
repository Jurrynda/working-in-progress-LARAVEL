@extends('layouts.app')
@section('content')

<form method="POST" action="/users/{{$user->id}}">
    @csrf
    @method('DELETE')

    <div class="form-group">
      <label for="name">Name</label>
      <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}" disabled>
    </div>
    <div>
        <button type="submit" class="btn btn-danger mt-3">Delete</button>
        <a class="align-bottom" href="/users">Back</a>
    </div>
  </form>

@endsection