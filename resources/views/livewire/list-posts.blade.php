<div>
    @for ($chunk = 0; $chunk < $page; $chunk++)
        <livewire:post-chunk :ids="$chunks[$chunk]" :key="$chunk" />
    @endfor

    @if ($this->hasMorePages())
        <button wire:click="loadMore">Load More</button>
    @endif
</div>
