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
        $this->filePath = $router->fileUrl('/Config/views.json', true);
        $this->objectJson = json_decode(file_get_contents($this->filePath));

        if ($_SERVER['REMOTE_ADDR'] !== '92.157.252.198') {
            if ($initialize) {
                $this->addView();
                $this->uniquesViewers();
                $this->setFile($this->filePath, $this->objectJson);
            }
        }
    }

    private function addView()
    {
        $this->objectJson->allViews += 1;
    }

    private function uniquesViewers()
    {
        if(!in_array($_SERVER['REMOTE_ADDR'], $this->objectJson->uniquesViewers)){
            $this->objectJson->uniquesViewers[] = $_SERVER['REMOTE_ADDR'];
        }
    }

    public function getUniquesViewers()
    {
        return count($this->objectJson->uniquesViewers, COUNT_RECURSIVE);
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
