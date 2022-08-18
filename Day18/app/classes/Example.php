<?php


namespace App\classes;


class Example
{
    public $name;
    public function __construct()
    {

    }
    public function index(){
        header('Location: action.php?page=home');
    }

}