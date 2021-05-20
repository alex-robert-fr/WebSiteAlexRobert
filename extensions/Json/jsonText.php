<?php

namespace App\Extensions\Json;

use App\Core\Router\Router;

class jsonText
{
    private string $jsonFilePath;
    public $jsonObject;
    private Router $router;

    public function __construct(string $jsonPath)
    {
        global $router;
        $this->router = $router;
        $this->jsonFilePath = $router->fileUrl($jsonPath, true);
        $this->jsonObject = json_decode(file_get_contents($this->jsonFilePath));
    }

    public function getText(string $category, string $name)
    {
        $text = $this->jsonObject->{$category}->{$name};
        return $text;
    }
    public function getTextInArray(string $category, string $name): array
    {
        return explode(',', $this->getText($category, $name));
    }

    public function setText(string $newText, string $category, string $name)
    {
        $jsonObject = $this->jsonObject;
        $jsonObject->{$category}->{$name} = $newText;
        $this->setFile($this->jsonFilePath, $jsonObject);
    }

    private function setFile($filePath, $content)
    {        
        $content = json_encode($content);
        $file = fopen($filePath, "w");
        fwrite($file, $content);
        fclose($file);
    }
}
