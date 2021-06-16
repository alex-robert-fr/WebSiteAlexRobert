<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_projects\Projects;
use App\Extensions\Json\jsonText;

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

    public function add()
    {
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {
            global $router;
            $jsonProject = new Projects();
            $title = '';
            $description = '';

            if (isset($_POST['editText'])) {
                if (isset($_POST['title'])) {
                    $title = $_POST['title'];
                }
                if (isset($_POST['description'])) {
                    $description = $_POST['description'];
                }
            }

            $jsonProject->createProject($title,$description);
            require_once __DIR__ . '/../Views/AddProjectView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }
}
