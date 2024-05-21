<div>
    @foreach ($posts as $post)
        <div>
            Id: {{ $post->id }}<br>
            Title: {{ $post->title }}<br>
        </div>
    @endforeach
</div>
