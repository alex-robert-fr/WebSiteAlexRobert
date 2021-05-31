<?php

namespace App\Extensions\Admin\Ext_projects;

use App\Core\Router\Router;
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

    public function createProject(string $title = '', string $languages = '', string $lastModified = '', bool $insite = true , string $website = '', string $github = '', string $status = '', string $description = '', bool $publish = false, int $id = 0)
    {
        foreach ($this->objectJson as $project) {
            $id = $project->id + 1;
        }

        // $img = "img_project_0.jpg";

        $objProject = new stdClass;
        $objProject->title = $title;
        $objProject->languages = $languages;
        $objProject->lastModified = $lastModified;
        $objProject->insite = $insite;
        $objProject->website = $website;
        $objProject->github = $github;
        $objProject->status = $status;
        $objProject->description = $description;
        $objProject->publish = $publish;

        echo '<pre>';
        var_dump($objProject);
        echo '</pre>';
    }
}
