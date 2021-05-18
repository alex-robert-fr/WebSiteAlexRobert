<?php

namespace App\Extensions\Admin\Ext_projects;

class Projects
{
    private string $filePath;
    private  $objectJson;

    public function __construct()
    {
        $this->filePath = dirname(__DIR__).'/ext_projects/projects.json';
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
