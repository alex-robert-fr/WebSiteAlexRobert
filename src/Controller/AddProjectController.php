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
            $edit = false;
            require_once __DIR__ . '/../Views/AddProjectView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }

    public function add()
    {
        $edit = false;
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {
            global $router;
            $modified = false;
            $jsonProject = new Projects();
            $json = new jsonText('/Config/projects.json');
            $title = '';
            $languages = '';
            $lastModified = '';
            $insite = true;
            $website = '';
            $github = '';
            $status = '';
            $description = '';
            $publish = false;
            // $languages = $json->getTextInArray($id, 'languages');

            // if (isset($_POST['languages-checked'])) {
            //     $implode = implode(',', $_POST['languages']);
            //     $json->setText(strtoupper($implode), $id, 'languages');
            //     $modified = true;
            // }

            if (isset($_POST['editText'])) {
                if (isset($_POST['title'])) {
                    $title = $_POST['title'];
                }
                if (isset($_POST['description'])) {
                    $description = $_POST['description'];
                }
                if(isset($_POST['publish'])){
                    $publish = true;
                } else {
                    $publish = false;
                }
                $modified = true;
            }

            // if (isset($_POST['editImg'])) {
            //     $img = new ImageManager($_FILES['imgHeader'], $_POST['editImg'], $id);
            //     $modified = true;
            // }
            // if (isset($_POST['links'])) {
            //     if (isset($_POST['linkWebsite'])) {
            //         $json->setText($_POST['linkWebsite'], $id, 'website');
            //     }
            //     if (isset($_POST['linkGit'])) {
            //         $json->setText($_POST['linkGit'], $id, 'github');
            //     }
            //     $modified = true;
            // }
            // if (isset($_POST['status'])) {
            //     if(isset($_POST['isFinish'])){
            //         $json->setText('finished', $id, 'status');
            //     } else {
            //         $json->setText('in progress', $id, 'status');
            //     }
            //     $modified = true;
            // }

            // $projects = new Projects();
            // $projects = $projects->getProjects($id);
            // if($modified){
            //     $json->setText(date('d M Y - H:i'), $id, 'lastModified');
            // }

            $jsonProject->createProject($title,$languages,$lastModified,$insite,$website,$github,$status,$description,$publish);
            require_once __DIR__ . '/../Views/AddProjectView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }
}
