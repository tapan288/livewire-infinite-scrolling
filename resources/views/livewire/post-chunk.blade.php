<div class="max-w-2xl mx-auto my-12 space-y-8">
    @foreach ($posts as $post)
        <div>
            <h2 class="font-bold text-3xl">{{ $post->id }}: {{ $post->title }}</h2>
            <p class="mt-2 text-lg">{{ $post->teaser }}</p>
        </div>
    @endforeach
</div>
