<?php


namespace App\classes;


abstract class ExampleThree
{
    public $country ;

    public function country ()
    {
        echo 'Bangladesh';
    }

    public abstract function four ();
}