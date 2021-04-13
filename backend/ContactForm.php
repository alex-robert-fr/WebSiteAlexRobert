<?php

class ContactForm{
    public string $name;
    public string $lastname;
    public string $subject;
    public string $email;
    public string $message;

    public array $error;

    public function __construct(array $formFields)
    {
        foreach($formFields as $field){
            $this->{'set' .ucfirst($field)}($_POST[$field]);
        }
    }

    private function setName(string $name): void{
        $this->checkLengthInput($name, 'name', 3, 20);
    }

    private function setLastname(string $lastname): void{
        $this->checkLengthInput($lastname, 'lastname', 3, 30);
    }
    
    private function setSubject(string $subject): void{
        $this->checkLengthInput($subject, 'subject', 3, 40);
    }
    
    private function setEmail(string $email): void{
    }
    
    private function setMessage(string $message): void{
        $this->checkLengthInput($message, 'message', 3, 3000);
    }

    private function checkLengthInput(string $input, string $varName, int $min, int $max): void{
        if(strlen($input) < $min){
            $this->error[$varName] = 'Le ' .$varName. ' est trop court';
        }
        if(strlen($input) > $max){
            $this->error[$varName] = 'Le ' .$varName. ' est trop long';
        }
        $this->{$varName} = htmlspecialchars($input);
    }
}
