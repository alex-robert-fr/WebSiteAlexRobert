<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_projects\Projects;

class ProjectsController
{
    public function show()
    {
        global $router;
        $projects = new Projects();
        require_once __DIR__.'/../Views/ProjectsView.php';
    }
}
