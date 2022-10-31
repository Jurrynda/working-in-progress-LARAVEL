{{-- @foreach ($posts as $post) --}}
<article>
    <div class="card mb-5">

        <header class="card-header">
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </header>

        <main class="card-body">
            <blockquote class="blockquote mb-0">
            <p>{!! $post->text !!}</p>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <a href="/users/{{ $post->user->id }}" class="mb-2">{{ $post->user->name}}</a>
                    <div>
                        <a href="/posts/{{$post->slug}}#comments">
                            {{ $post->comments->count() }} 
                            <span>{{ str_plural('comment', $post->comments->count())}}</span>
                        </a>
                    </div>
                </div>
                <div>
                    <date datetime="{{ $post->created_at->toW3cString() }}" class="mr-auto">{{ $post->created_at->diffForHumans()}}</date>
                </div>
                
            </div>
            </blockquote>
        </main>

    </div>
</article>



{{-- @endforeach --}}

