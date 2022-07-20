<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Services\BlogService;

class BlogController extends Controller
{
    protected $blogService;

    /**
     * BlogController constructor.
     */
    public function __construct()
    {
        Parent::__construct();
        $this->blogService = new BlogService();
    }

    /**
     * Blog list
     * 
     * @return View
     */
    public function index()
    {
        $posts = $this->blogService->getPosts();
        return $this->view->render("blog/list", compact('posts'));
    }
}