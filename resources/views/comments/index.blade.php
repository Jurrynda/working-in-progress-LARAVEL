<section>
    <div>
        @auth
            @include('comments.create')
        @endauth
        
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    @include('comments.show')
                </li>
            @endforeach
        </ul>
    </div>
</section>