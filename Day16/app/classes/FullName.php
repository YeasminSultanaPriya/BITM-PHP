<?php


namespace App\classes; //virtual directory

//Operator
/*
arithmetic (+,-.*,/,%,++,--, (-))
assignment (+=,-=,*=,/=,%=,.=)
conditional (>,>=,<,<=,==,===,!=,!==)
logical (&&, ||, !)
 */


class FullName
{
    public $message;
    public $firstName;
    public $lastName;
    public $x = 10;
    public $y = 20;
//    public $y = '10';
//    public $z = 10.2;
//    public $b = true;

    public function __construct()
    {
        $this->message = 'Hello Bangladesh'; //$this => own class object
        $this->firstName = 'YS';
        $this->lastName = 'Priya';
    }
    public function fullName(){
        echo $this->message . "<br />";
        echo $this->firstName .' &nbsp; '. $this->lastName . "<br />";
//        echo gettype($this->x) . "<br />";
//        echo gettype($this->y) . "<br />";
//        echo gettype($this->z) . "<br />";
//        echo gettype($this->b) . "<br />";

        ##############   arithmetic operator   ###########

        echo $this->x + $this->y . "<br/>";
        echo $this->x - $this->y . "<br/>";
        echo $this->x * $this->y . "<br/>";
        echo $this->x / $this->y . "<br/>";
        echo $this->x % $this->y . "<br/>";

        echo $this->x++ . "<br/>"; //10
        echo ++$this->x . "<br/>"; //12

        echo $this->x--. "<br/>"; //12
        echo --$this->x. "<br/>"; //10

        echo -$this->x. "<br/>"; //-10

        ##############   assignment operator   ###########

        echo  "<br/>";
        echo $this->x += $this->y; //x = x+y
        echo  "<br/>";
        echo $this->x -= $this->y; // x = x-y
        echo  "<br/>";
        echo $this->x *= $this->y;
        echo  "<br/>";
        echo $this->x /= $this->y;
        echo  "<br/>";
        echo $this->x %= $this->y;
        echo  "<br/>";
        echo $this->x .= $this->y;
        echo  "<br/>";

        ##############   conditional operator   ###########
        echo $this->x > $this->y;
        echo $this->x >= $this->y;
        echo $this->x < $this->y;
        echo $this->x <= $this->y;
        $this->x = 10;
        $this->y = '10';
        echo $this->x == $this->y; // true
        echo $this->x === $this->y; //false
        echo $this->x != $this->y;  //false  (check value)
        echo $this->x !== $this->y; //true  (check value and data type)
        $this->x = true;
        echo !$this;

        ##############   logical operator   ###########




    }

}

