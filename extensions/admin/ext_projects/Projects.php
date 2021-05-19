<?php

namespace App\Extensions\Admin\Ext_projects;

use App\Core\Router\Router;

class Projects
{
    private string $filePath;
    private  $objectJson;
    private Router $router;

    
    public function __construct()
    {
        global $router;
        $this->router = $router;
    
        $this->filePath = $router->fileUrl('/Extensions/Admin/Ext_projects/projects.json', true);
        $this->objectJson = json_decode(file_get_contents($this->filePath));
    }

    public function getProjects(int $id = null)
    {
        if($id !== null){
            return $this->objectJson->{$id};
        }
        return $this->objectJson;
    }
    public function numberProjects(): int
    {
        $nbProjects = 0;
        foreach ($this->objectJson as $project) {
            $nbProjects ++;
        }
        return $nbProjects;
    }
}
