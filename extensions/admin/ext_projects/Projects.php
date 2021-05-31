<?php

namespace App\Extensions\Admin\Ext_projects;

use App\Core\Router\Router;
use App\Extensions\Json\jsonText;
use stdClass;

class Projects
{
    private string $filePath;
    private  $objectJson;
    private Router $router;

    
    public function __construct()
    {
        global $router;
        $this->router = $router;
    
        $this->filePath = $router->fileUrl('/Config/projects.json', true);
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

    public function createProject(string $title = '', string $description = '')
    {
        foreach ($this->objectJson as $project) {
            $id = $project->id + 1;
        }

        $objProject = new stdClass;
        $objProject->id = $id;
        $objProject->img = '';
        $objProject->title = $title;
        $objProject->languages = '';
        $objProject->lastModified = '';
        $objProject->insite = true;
        $objProject->website = '';
        $objProject->github = '';
        $objProject->status = 'in progress';
        $objProject->description = $description;
        $objProject->publish = false;
        $this->objectJson->{$id} = $objProject;

        $content = json_encode($this->objectJson);
        $file = fopen($this->router->fileUrl('/Config/projects.json', true), "w");
        fwrite($file, $content);
        fclose($file);
    }

    public function deleteProject(array $ids)
    {
        foreach ($ids as $id) {
            unset($this->objectJson->{$id});
        }
        $content = json_encode($this->objectJson);
        $file = fopen($this->router->fileUrl('/Config/projects.json', true), "w");
        fwrite($file, $content);
        fclose($file);
    }
}
