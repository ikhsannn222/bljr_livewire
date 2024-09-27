<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('posts')]
class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]
    public function updateList($post)
    {

    }
    public function render()
    {
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index',[
            'posts' => $posts,
        ]);
    }
}
