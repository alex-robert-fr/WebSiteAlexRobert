<?php

namespace App\Src\Controller;

class AutomatixController
{
    public function show(){
        global $router;
        
        $css = str_replace('/Automatix', '', $_SERVER['REQUEST_URI']). '/src/Views/css/';
        $img =  str_replace('/Automatix', '', $_SERVER['REQUEST_URI']). '/src/Views/img/';
        require_once __DIR__.'/../Views/AutomatixView.php';
    }
}
