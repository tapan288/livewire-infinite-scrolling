<div>
    @for ($chunk = 0; $chunk < $page; $chunk++)
        {{ $chunk }}
    @endfor

    @if ($this->hasMorePages())
        <button wire:click="loadMore">Load More</button>
    @endif
</div>
