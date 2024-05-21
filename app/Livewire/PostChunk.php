<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostChunk extends Component
{
    public $ids;

    public function render()
    {
        return view('livewire.post-chunk', [
            'posts' => Post::query()
                ->whereIn('id', $this->ids)
                ->latest()
                // ->orderByRaw("FIELD(id," . implode(',', $this->ids) . ")")
                ->get()
        ]);
    }
}
