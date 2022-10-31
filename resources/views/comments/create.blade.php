@include('errors')

<form id="comments" method="POST" action="/comments">
  @csrf
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Add comment</label>
      <textarea name="text" placeholder="Write some text..." class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Add</button>

    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <input type="hidden" name="post_id" value="{{ $post->id }}">
  </form>