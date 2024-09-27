<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Block extends Component
{
    public \App\Models\post $post;
    public function render()
    {
        return view('livewire.posts.block');
    }
}
