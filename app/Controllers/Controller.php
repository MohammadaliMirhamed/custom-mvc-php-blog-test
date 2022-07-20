<?php

namespace App\Controllers;

use App\Libs\Request;
use App\Libs\View;

class Controller
{
    protected $request;
    protected $view;

    public function __construct()
    {
        $this->request = new Request();
        $this->view = new View();
    }
}