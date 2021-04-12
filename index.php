<?php
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


//récupérer entrer user//
//vérifier les entrer//
//envoyer en base les données
//envoyer un mail