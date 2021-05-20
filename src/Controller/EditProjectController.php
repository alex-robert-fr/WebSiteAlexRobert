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
        $json = new jsonText('/Extensions/Admin/Ext_projects/projects.json');
        $languages = $json->getTextInArray($id, 'languages');
        require_once __DIR__.'/../Views/EditProjectView.php';
    }
    public function edit($id)
    {
        global $router;
        $json = new jsonText('/Extensions/Admin/Ext_projects/projects.json');
        $languages = $json->getTextInArray($id, 'languages');

        if(isset($_POST['languages-checked'])){
            $implode = implode(',', $_POST['languages']);
            $json->setText(strtoupper($implode), $id, 'languages');
        }

        if(isset($_POST['editText'])){
            if(isset($_POST['title'])){
                $json->setText($_POST['title'], $id, 'title');
            }
            if(isset($_POST['description'])){
                $json->setText($_POST['description'], $id, 'description');
            }
        }

        if (isset($_POST['editImg'])) {
            $img = new ImageManager($_FILES['imgHeader'], $_POST['editImg'], $id);
        }
        if(isset($_POST['links'])){
            if (isset($_POST['linkWebsite'])) {
                $json->setText($_POST['linkWebsite'], $id, 'website');
            }
            if (isset($_POST['linkGit'])) {
                $json->setText($_POST['linkGit'], $id, 'github');
            }
        }

        $projects = new Projects();
        $projects = $projects->getProjects($id);


        require_once __DIR__.'/../Views/EditProjectView.php';
    }
}