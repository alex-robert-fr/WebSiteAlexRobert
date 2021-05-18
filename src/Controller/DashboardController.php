<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_data\Counter;
use App\Extensions\Admin\Ext_projects\Projects;

class DashboardController
{
    public function show()
    {
        global $router;
        $countAllView = new Counter(false);
        $projects = new Projects();
        require_once __DIR__ . '/../Views/DashboardView.php';
    }
}
