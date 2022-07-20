<?php

namespace App\Libs\Contracts;

interface ViewInterface
{
    /**
     * @param string $path
     * @param array $variables
     * @return void
     */
    public function render($page, $variables = []) :void;
}