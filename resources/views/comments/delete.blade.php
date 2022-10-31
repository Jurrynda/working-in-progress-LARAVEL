@extends('layouts.app')

@section('content')

<form method="POST" action="/comments/{{ $comment->id }}">
    @csrf
    @method('delete')
  
      <div class="form-group">
        <label for="text">Add comment</label>
        <textarea name="text" placeholder="Write some text..." class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$comment->text}}</textarea>
      </div>
      <button type="submit" class="btn btn-danger mt-2">Delete</button>
    </form>
     
@endsection