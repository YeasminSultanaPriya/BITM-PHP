<?php


namespace App\classes;

use App\classes\ExampleThree;

class Teacher extends ExampleThree
{
    public $name;
    protected $institute;
    private $email;

    public function four()
    {
        echo 'four';
    }

    public function __construct()
    {
//        $this->name = 'Mainul Islam';
    }

    public function name ()
    {
        echo 'Habibur Rahman';
    }

    protected function institute ()
    {
        echo 'BITM';
    }

    private function email ()
    {
        echo '1@1.2';
    }
}