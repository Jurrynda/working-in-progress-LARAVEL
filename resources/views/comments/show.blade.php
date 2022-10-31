<article class="mt-5">
    <div>
        {{ $comment->text}}
    </div>
    <div class="d-flex justify-content-between">
        <div>
            <a href="/users/{{ $comment->user->id }}">{{ $comment->user->name }}</a>
            <time datetime="{{ $comment->created_at }}">{{ $comment->created_at->diffForHumans() }}</time>
        </div>
        <div>
            <a href="/comments/{{ $comment->id }}/edit">edit</a>
            <a href="/comments/{{$comment->id}}">delete</a>
        </div>
    </div>
    
</article>