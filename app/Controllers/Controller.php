<?php

namespace App\Controllers;

use App\Libs\Request;

class Controller
{
    protected $request;

    public function __construct()
    {
        $this->request = new Request();
    }
}