<?php

namespace App\Services;

use App\Models\Post;

class BlogService
{
    public function getPosts()
    {
        return Post::with(['user'])->get();
    }
}