<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_image_manager\ImageManager;
use App\Extensions\Admin\Ext_projects\Projects;
use App\Extensions\Json\jsonText;

class EditProjectController
{
    public function show($id)
    {
        global $router;
        $projects = new Projects();
        $projects = $projects->getProjects($id);
        require_once __DIR__.'/../Views/EditProjectView.php';
    }
    public function edit($id)
    {
        global $router;

        if(isset($_POST['editText'])){
            if(isset($_POST['title'])){
                $json = new jsonText('/Extensions/Admin/Ext_projects/projects.json');
                $json->setText($_POST['title'], $id, 'title');
            }
            if(isset($_POST['description'])){
                $json = new jsonText('/Extensions/Admin/Ext_projects/projects.json');
                $json->setText($_POST['description'], $id, 'description');
            }
        }

        if (isset($_POST['editImg'])) {
            $img = new ImageManager($_FILES['imgHeader'], $_POST['editImg'], $id);
        }

        $projects = new Projects();
        $projects = $projects->getProjects($id);


        require_once __DIR__.'/../Views/EditProjectView.php';
    }
}
