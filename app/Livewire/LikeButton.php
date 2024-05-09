<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LikeButton extends Component
{
    public $post;
    public $likes;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->likes = $post->likes()->count();
    }

    public function likePost()
    {
        $this->post->likes()->create([]);
        $this->likes++;
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
