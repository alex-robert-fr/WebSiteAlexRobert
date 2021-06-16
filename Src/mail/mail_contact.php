<?php
$to         = 'contact.alexrobert04@gmail.com';

$header     ="MIME-Version: 1.0\r\n";
$header     .="From:'alexrobert.fr'"."\n";
$header     .="Content-Type:text/html; charset='utf-8'"."\n";
$header     .="Content-Transfer-Encoding: 8bit";

$subject    = 'Formulaire de contact';

$message    = '<p>Envoyé par ' .$contactForm->name. ' ' . $contactForm->lastname. '</p>';
$message    .= '<p>Depuis ' .$contactForm->email . '</p>';
$message    .= '<p>' .$contactForm->subject. ':' . '</p>';
$message    .= '<p>' .$contactForm->message. '</p>';

mail($to, $subject, $message, $header);