<?php

namespace App\Src\Controller;

class MentionsController
{
    public function show(){
        global $router;
        require_once __DIR__.'/../Views/MentionsView.php';
    }
}
