<?php

namespace App\Controllers;

use App\Models\Post;

class BlogController
{
    public function index()
    {
        var_dump(Post::all());
    }
}