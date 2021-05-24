<?php

namespace App\Src\Controller;

class AddProjectController
{
    public function show()
    {
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {
            global $router;
            require_once __DIR__ . '/../Views/AddProjectView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }
}
