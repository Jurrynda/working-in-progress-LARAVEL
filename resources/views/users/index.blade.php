@extends('layouts.app')

@section('content')

    <form method="POST" action="/users">
        <h2>Create new</h2>
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp">
        </div>
        <div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </div>
    </form>

  <h2 class="mt-3 mb-3">Users</h2>

    @foreach ($users as $user)

        <article>
            <div>
                {{ $user->name}}
                <a href="/users/{{$user->id}}/edit">edit</a>
                <span>||</span>
                <a href="/users/{{$user->id}}">delete</a>
            </div>
        </article>

    @endforeach
    
@endsection