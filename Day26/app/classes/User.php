<?php


namespace App\classes;

use App\classes\Teacher;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\ExampleFive;

class User extends Teacher implements ExampleOne, ExampleTwo
{
    use ExampleFive;

    public $name;
    protected $city;
    private $mobile;

    public function __construct()
    {
        $this->name = 'Rasel';
    }

    public function one()
    {
        echo 'one';
    }
    public function two()
    {
        echo 'two';
    }
    public function three()
    {
        echo 'three';
    }

    public function name ()
    {
//        echo 'CR';
//        $this->mobile();
//        $this->city();
//        $teacher = new Teacher();
//        $teacher->institute();
//        $this->one();
//        $this->two();
//        $this->three();
//        $this->four();
        $this->five();
    }

    protected function city ()
    {
        echo 'dhaka';
    }

    private function mobile ()
    {
        echo '0123456874';
    }
}