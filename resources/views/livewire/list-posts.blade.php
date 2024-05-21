<div>
    @for ($chunk = 0; $chunk < $page; $chunk++)
        <livewire:post-chunk :ids="$chunks[$chunk]" :key="$chunk" />
    @endfor

    @if ($this->hasMorePages())
        <div class="-translate-y-32" x-intersect="$wire.loadMore"></div>
    @endif
</div>
