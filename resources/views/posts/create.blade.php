@extends('layouts.app')

@section('content')
    
    <form id="comments" method="POST" action="/posts">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" placeholder="Write some text..." class="form-control" rows="3"></input>
      </div>
      <div class="form-group">
        <label for="text">Text</label>
        <textarea name="text" placeholder="Write some text..." class="form-control" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mt-2">Create</button>
  
      <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    </form>
         
@endsection


    

 
