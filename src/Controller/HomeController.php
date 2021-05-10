<?php

namespace App\Controller;

class HomeController
{
    public function show(){
        $css = $_SERVER['REQUEST_URI']. 'src/Views/css/';
        $img = $_SERVER['REQUEST_URI']. 'src/Views/img/';
        require_once __DIR__.'/../Views/HomeView.php';
    }
}
