<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;
use App\Libs\Request;

class BlogController extends Controller
{
    public function index()
    {
        var_dump($this->request->all());
    }
}