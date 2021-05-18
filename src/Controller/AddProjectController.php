<?php

namespace App\Src\Controller;

class AddProjectController
{
    public function show()
    {
        global $router;
        require_once __DIR__.'/../Views/AddProjectView.php';
    }
}
