<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_login\LoginAdmin;
use Exception;

class AdminConnexionController
{
    public function show()
    {
        require_once __DIR__.'/../Views/AdminConnexionView.php';
    }

    public function login()
    {
        if(isset($_POST['login'])){
            try{                
                if (empty($_POST['email'])) {
                    throw new \Exception("L'adresse email ne peu pas être vide !");
                }
            } catch(Exception $e){
                $errorEmail = $e->getMessage();
            }

            try{
                if (empty($_POST['password'])) {
                    throw new \Exception("Le mot de passe ne peu pas être vide !");
                }
            }catch(Exception $e){
                $errorPassword = $e->getMessage();
            }

            try{
                if(!empty($_POST['email']) && !empty($_POST['password'])){
                    $login = new LoginAdmin($_POST['email'], $_POST['password']);
                    if($login->isValid()){
                        header('location:'. $_SERVER['REQUEST_URI'] .'/dashboard');
                    } else{
                        throw new \Exception("L'adresse email ou le mot de passe est faux !");
                    }
                }
            }catch(Exception $e){
                $errorLogin = $e->getMessage();
            }
            require_once __DIR__.'/../Views/AdminConnexionView.php';
        }

    }
}
