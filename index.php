<?php

$use_sts = true;
if($use_sts && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
} elseif ($use_sts) {
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], true, 301);
    die();
}

require_once('./backend/ContactForm.php');

if(isset($_POST['send'])){
    $contactForm = new ContactForm(['name', 'lastname', 'subject', 'email', 'message']);
    if(!empty($contactForm->error)){
        foreach($contactForm->error as $error => $description){
            if($error == 'name'){
                $errorName = $description;
            }
            if($error == 'lastname'){
                $errorLastname = $description;
            }
            if($error == 'subject'){
                $errorSubject = $description;
            }
            if($error == 'message'){
                $errorMessage = $description;
            }
        }
    } else {
        require_once('./mail/mail_contact.php');
    }
}

require_once('./frontend/views/inc_index_view.php');
