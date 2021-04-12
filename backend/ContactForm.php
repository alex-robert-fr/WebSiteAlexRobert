<?php

class ContactForm{
    public string $name;
    public string $lastname;
    public string $subject;
    public string $email;
    public string $msg;

    public array $error;

    public function __construct(array $formFields)
    {
        foreach($formFields as $field){
            $this->{'set' .ucfirst($field)}($_POST[$field]);
        }
    }

    private function setName(string $name): void{
        if(strlen($name) < 3){
            $this->error = ['name' => 'Le prénom est trop court'];
        }
        if(strlen($name) > 20){
            $this->error = ['name' => 'Le prénom est trop long'];
        }
        $this->name = $name;
    }

    private function setLastname(string $lastname): void{
        if(strlen($lastname) < 3){
            $this->error['lastname'] = 'Le nom est trop court';
        }
        if(strlen($lastname) > 30){
            $this->error['lastname'] = 'Le nom est trop long';
        }
        $this->lastname = $lastname;
    }
    
    private function setSubject(string $subject): void{
        if(strlen($subject) < 3){
            $this->error['subject'] = 'Le sujet est trop court';
        }
        if(strlen($subject) > 40){
            $this->error['subject'] = 'Le sujet est trop long';
        }
        $this->subject = $subject;
    }
    
    private function setEmail(string $email): void{
        $this->email = $email;
    }
    
    private function setMessage(string $msg): void{
        if(strlen($msg) < 3){
            $this->error['message'] = 'Le message est trop court';
        }
        if(strlen($msg) > 3000){
            $this->error['message'] = 'Le message est trop long';
        }
        $this->msg = $msg;
    }

    private function SendDataBase():void {
        
    }
}
