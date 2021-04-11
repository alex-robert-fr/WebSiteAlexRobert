<?php
require_once('./backend/ContactForm.php');

if(isset($_POST['send'])){
    try{
        $contactForm = new ContactForm(['name', 'lastname', 'subject', 'email', 'message']);
    } catch (Exception $error){
        echo $error->getMessage();
    }
}


require_once('./frontend/views/inc_index_view.php');


//récupérer entrer user
//vérifier les entrer
//envoyer en base les données
//envoyer un mail