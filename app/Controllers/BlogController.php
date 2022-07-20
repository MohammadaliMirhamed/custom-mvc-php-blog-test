<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Services\BlogService;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct()
    {
        Parent::__construct();
        $this->blogService = new BlogService();
    }

    public function index()
    {
        $posts = $this->blogService->getPosts();
        return $this->view->render("blog", compact('posts'));
    }
}