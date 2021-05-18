<?php

namespace App\Extensions\Json;

class jsonText
{
    private string $jsonFilePath;
    private $jsonObject;

    public function __construct(string $jsonPath)
    {
        $this->jsonFilePath = $jsonPath;
        $this->jsonObject = json_decode(file_get_contents($jsonPath));
    }

    public function getText(string $category, string $name)
    {
        $text = $this->jsonObject->{$category}->{$name};
        return $text;
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
