<?php

namespace App\Src\Controller;

use App\Extensions\Admin\Ext_login\LoginAdmin;
use Exception;

class AdminConnexionController
{
    public function show()
    {
        global $router;
        require_once __DIR__.'/../Views/AdminConnexionView.php';
    }

    public function login()
    {
        global $router;
        if(isset($_POST['login'])){
            try{                
                if (empty($_POST['email'])) {
                    throw new \Exception("L'adresse email ne peu pas être vide !");
                }
            } catch(Exception $e){
                $_SESSION['admin'] = false;
                session_write_close();
                $errorEmail = $e->getMessage();
            }

            try{
                if (empty($_POST['password'])) {
                    throw new \Exception("Le mot de passe ne peu pas être vide !");
                }
            }catch(Exception $e){
                $_SESSION['admin'] = false;
                session_write_close();
                $errorPassword = $e->getMessage();
            }

            try{
                if(!empty($_POST['email']) && !empty($_POST['password'])){
                    $login = new LoginAdmin($_POST['email'], $_POST['password']);
                    if($login->isValid()){
                        $_SESSION['admin'] = true;
                session_write_close();
                        header('location:'. $router->url('dashboard'));
                    } else{
                        throw new \Exception("L'adresse email ou le mot de passe est faux !");
                    }
                }
            }catch(Exception $e){
                $_SESSION['admin'] = false;
                session_write_close();
                $errorLogin = $e->getMessage();
            }
            require_once __DIR__.'/../Views/AdminConnexionView.php';
        }

    }
}
