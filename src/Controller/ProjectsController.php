<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_projects\Projects;

class ProjectsController
{
    public function show()
    {
        global $router;
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {
            $projects = new Projects();
            require_once __DIR__ . '/../Views/ProjectsView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }
}
