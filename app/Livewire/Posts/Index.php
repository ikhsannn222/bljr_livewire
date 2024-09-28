<?php

namespace App\Livewire\Posts;

use Livewire\Component;

#[\Livewire\Attributes\Lazy]

class Index extends Component
{
    #[\Livewire\Attributes\On('postCreated')]
    public function updateList($post)
    {

    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {


        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index',[
            'posts' => $posts,
        ]);
    }
}
