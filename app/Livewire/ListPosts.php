<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class ListPosts extends Component
{
    public array $chunks = [];

    public $page = 1;

    public function mount()
    {
        $this->chunks = Post::latest()->pluck('id')->chunk(10)->toArray();
    }

    public function hasMorePages()
    {
        return $this->page < count($this->chunks);
    }

    public function loadMore()
    {
        if (!$this->hasMorePages()) {
            return;
        }

        $this->page++;
    }

    public function render()
    {
        return view('livewire.list-posts');
    }
}
