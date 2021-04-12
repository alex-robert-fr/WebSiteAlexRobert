<?php

class ContactForm{
    public string $name;
    public string $lastname;
    public string $subject;
    public string $email;
    public string $msg;

    public function __construct(array $formFields)
    {
        foreach($formFields as $field){
            $this->{'set' .ucfirst($field)}($_POST[$field]);
        }
    }

    public function setName(string $name): void{
        if(strlen($name) < 3){
            throw new Exception('Le prénom est trop court');
        }
        if(strlen($name) > 20){
            throw new Exception('Le prénom est trop long');
        }
        $this->name = $name;
    }

    public function setLastname(string $lastname): void{
        if(strlen($lastname) < 3){
            throw new Exception('Le nom est trop court');
        }
        if(strlen($lastname) > 30){
            throw new Exception('Le nom est trop long');
        }
        $this->lastname = $lastname;
    }
    
    public function setSubject(string $subject): void{
        if(strlen($subject) < 3){
            throw new Exception('Le sujet est trop court');
        }
        if(strlen($subject) > 40){
            throw new Exception('Le sujet est trop long');
        }
        $this->subject = $subject;
    }
    
    public function setEmail(string $email): void{
        $this->email = $email;
    }
    
    public function setMessage(string $msg): void{
        if(strlen($msg) < 3){
            throw new Exception('Le message est trop court');
        }
        if(strlen($msg) > 3000){
            throw new Exception('Le message est trop long');
        }
        $this->msg = $msg;
    }

    public function SendDataBase():void {
        
    }
}
