<?php

namespace App\Extensions\Admin\Ext_data;

class Counter
{
    private string $filePath;
    private  $objectJson;

    public function __construct(bool $initialize = true)
    {
        $this->filePath = dirname(__DIR__).'/ext_data/views.json';
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
