<?php

namespace App\Extensions\Admin\Ext_login;

use App\Core\Router\Router;
use App\Extensions\Json\jsonText;

class LoginAdmin
{
    private string $emailHash;
    private string $passwordHash;
    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {

        $this->email = $email;
        $this->password = $password;

        $jsonText = new jsonText('/Config/login.json');
        $this->emailHash = $jsonText->getText('admin', 'email');
        $this->passwordHash = $jsonText->getText('admin', 'password');
    }

    public function isValid(): bool
    {
        if($this->email === $this->emailHash && password_verify($this->password, $this->passwordHash)){
            return true;
        }
        return false;
    }
}
