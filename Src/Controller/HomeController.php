<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_data\Counter;
use App\Extensions\Admin\Ext_projects\Projects;
use App\Extensions\Json\jsonText;

class HomeController
{
    public function show()
    {
        global $router;
        $counter = new Counter();
        $projects = new Projects();
        $json = new jsonText('/Config/projects.json');
        $json = $json->jsonObject;
        require_once dirname(__DIR__) . '/Views/HomeView.php';
    }
    public function sendMailContact()
    {
        global $router;
        $projects = new Projects();
        $json = new jsonText('/Config/projects.json');

        require_once dirname(__DIR__) . '/Models/ContactForm.php';

        if(isset($_POST['disconnection'])){
            session_destroy();
        }
        
        if (isset($_POST['sendMailContact'])) {
            $contactForm = new \ContactForm(['name', 'lastname', 'subject', 'email', 'message']);
            if (!empty($contactForm->error)) {
                foreach ($contactForm->error as $error => $description) {
                    if ($error == 'name') {
                        $errorName = $description;
                    }
                    if ($error == 'lastname') {
                        $errorLastname = $description;
                    }
                    if ($error == 'subject') {
                        $errorSubject = $description;
                    }
                    if ($error == 'message') {
                        $errorMessage = $description;
                    }
                }
            } else {
                require_once dirname(__DIR__).'/mail/mail_contact.php';
            }
        }
        require_once dirname(__DIR__) . '/Views/HomeView.php';
    }
}
