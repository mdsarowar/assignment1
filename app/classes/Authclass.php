<?php

namespace App\classes;

class Authclass
{
    public $authemail;
    public $authpass;
    public $email;
    public $pass;

    public function __construct($data=null)
    {
        if ($data){
            $this->authemail=$data['email'];
            $this->authpass=$data['pass'];
        }

    }

    public function login(){
        $this->email='sarowar@gmail.com';
        $this->pass='123456';
        if ($this->email==$this->authemail && $this->pass==$this->authpass){
            echo 'success';
            session_start();
            $_SESSION['id']=rand(10,1000);
            header('Location: action.php?pages=fileupload');
        }
        else{
            return 'sorry........ Please Try again';
        }


    }
    public function logout(){
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?pages=login');

    }

}