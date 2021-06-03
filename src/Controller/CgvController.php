<?php

namespace App\Src\Controller;

class CgvController
{
    public function show(){
        global $router;
        require_once __DIR__.'/../Views/CgvView.php';
    }
}
