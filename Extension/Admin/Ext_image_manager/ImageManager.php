<?php

namespace App\Extensions\Admin\Ext_image_manager;

use App\Core\Router\Router;
use App\Extensions\Json\jsonText;
use SplFileInfo;

class ImageManager
{
    private $image;
    private string $completeName;
    private string $name;
    private string $imgPath;
    private Router $router;

    public function __construct($image, $post, $id)
    {
        global $router;
        $this->router = $router;

        $this->image = $image;
        $this->imgPath = $router->fileUrl('/Src/Views/img/', true);
        $json = new jsonText('/Config/projects.json');

        if ($image['error'] !== UPLOAD_ERR_OK) {
            throw new \Exception("Erreur de téléchargement");
        }
        if ($image['type'] !== 'image/png' && $image['type'] !== 'image/jpeg') {
            throw new \Exception("Le format de l'image n'est pas valide");
        }
        if (isset($_POST['editImg'])) {
            $this->completeName = $this->imgName('project', $id);
            $this->name = $this->imgName('project', $id, true);

            $json->setText($this->completeName, $id, 'img');
            move_uploaded_file($image['tmp_name'], $this->imgPath . $this->completeName);
            $this->imgDelete($this->name, $this->completeName);
        }
    }

    public function getExtension()
    {
        $ext = new SplFileInfo($this->image['name']);
        return $ext->getExtension();
    }

    private function imgName(string $name1, string $name2, bool $uniqueName = false)
    {
        if ($uniqueName) {
            return 'img_' .$name1. '_' .$name2;
        }
        return 'img_' .$name1. '_' .$name2 . '.' . $this->getExtension();
    }

    public function imgDelete(string $name, string $notFileDelete)
    {
        $files = scandir($this->imgPath);
        foreach ($files as $file) {
            if(strstr($file, $name)){
                if ($file !== $notFileDelete) {
                    unlink($this->imgPath . $file);
                }
            }
        }
    }
}
