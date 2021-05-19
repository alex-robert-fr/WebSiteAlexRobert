<?php

namespace App\Extensions\Admin\Ext_data;

use App\Core\Router\Router;

class Counter
{
    private Router $router;
    private string $filePath;
    private  $objectJson;

    public function __construct(bool $initialize = true)
    {
        global $router;
        $this->router = $router;
        $this->filePath = $router->fileUrl('/Extensions/Admin/Ext_data/views.json', true);
        $this->objectJson = json_decode(file_get_contents($this->filePath));

        if($initialize){
            $this->addView();
            $this->setFile($this->filePath, $this->objectJson);
        }
    }

    private function addView()
    {
        $this->objectJson->allViews += 1;

    }

    private function setFile($filePath, $content)
    {        
        $content = json_encode($content);
        $file = fopen($filePath, "w");
        fwrite($file, $content);
        fclose($file);
    }

    public function getViews(): string
    {
        return $this->objectJson->allViews;
    }
}
