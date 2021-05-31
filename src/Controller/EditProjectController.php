<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_image_manager\ImageManager;
use App\Extensions\Admin\Ext_projects\Projects;
use App\Extensions\Json\jsonText;

class EditProjectController
{
    public function show($id)
    {
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {
            global $router;
            $projects = new Projects();
            $projects = $projects->getProjects($id);
            $json = new jsonText('/Config/projects.json');
            $languages = $json->getTextInArray($id, 'languages');
            require_once __DIR__ . '/../Views/EditProjectView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }
    public function edit($id)
    {
        if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['admin']) && $_SESSION['admin']) {
            global $router;
            $modified = false;
            $json = new jsonText('/Config/projects.json');
            $languages = $json->getTextInArray($id, 'languages');

            if (isset($_POST['languages-checked'])) {
                $implode = implode(',', $_POST['languages']);
                $json->setText(strtoupper($implode), $id, 'languages');
                $modified = true;
            }

            if (isset($_POST['editText'])) {
                if (isset($_POST['title'])) {
                    $json->setText($_POST['title'], $id, 'title');
                }
                if (isset($_POST['description'])) {
                    $json->setText($_POST['description'], $id, 'description');
                }
                if(isset($_POST['publish'])){
                    $json->setBool(true, $id, 'publish');
                } else {
                    $json->setBool(false, $id, 'publish');
                }
                $modified = true;
            }

            if (isset($_POST['editImg'])) {
                $img = new ImageManager($_FILES['imgHeader'], $_POST['editImg'], $id);
                $modified = true;
            }
            if (isset($_POST['links'])) {
                if (isset($_POST['linkWebsite'])) {
                    $json->setText($_POST['linkWebsite'], $id, 'website');
                }
                if (isset($_POST['linkGit'])) {
                    $json->setText($_POST['linkGit'], $id, 'github');
                }
                $modified = true;
            }
            if (isset($_POST['status'])) {
                if(isset($_POST['isFinish'])){
                    $json->setText('finished', $id, 'status');
                } else {
                    $json->setText('in progress', $id, 'status');
                }
                $modified = true;
            }

            $projects = new Projects();
            $projects = $projects->getProjects($id);
            if($modified){
                $json->setText(date('d M Y - H:i'), $id, 'lastModified');
            }

            require_once __DIR__ . '/../Views/EditProjectView.php';
        } else {
            require_once __DIR__ . '/../Views/404.php';
        }
    }
}
