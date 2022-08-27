<?php 

namespace App\classes;

class Auth{
    public $email, $password;
    public $userEmail, $userPassword;
    public function __construct($data=null)
    {
        $this->userEmail = $data['email'];
        $this->userPassword = $data['password'];
        
    }

    public function login(){
        $this->email = 'admin@admin.com';
        $this->password = '123456';
        if($this->email == $this->userEmail && $this->password == $this->userPassword){
            session_start();
            $_SESSION['id'] = rand(10,1000);
             header('Location: action.php?page=home');
        }
        return 'Email or Password is invalid';
       
    }

    public function logout(){
        session_start();
        unset($_SESSION['id']);
        header('Location: action.php?page=login');
    }
}