<?php

namespace App\Libs;

use App\Libs\Contracts\ViewInterface;

class View implements ViewInterface
{
   public function render($path, $variables=[]) :void
   {
       if(count($variables))
           extract($variables);

       require __DIR__ . '/../../resources/' . $path . '.php';
   }
}