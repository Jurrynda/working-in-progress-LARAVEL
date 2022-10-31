@include('errors')

  @extends('layouts.app')

    @section('content')
    
    <form method="POST" action="/comments/{{ $comment->id }}">
        @csrf
        @method('PATCH')
      
          <div class="form-group">
            <label for="text">Add comment</label>
            <textarea name="text" placeholder="Write some text..." class="form-control" id="exampleFormControlTextarea1" rows="3">{{$comment->text}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mt-2">Add</button>
        </form>
         
@endsection


    

 
