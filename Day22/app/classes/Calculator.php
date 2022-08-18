<?php


namespace App\classes;


class Calculator
{
    public $num1, $num2, $choice, $result;
    public function __construct($data)
    {
        if ($data['number1']){
            $this->num1 = $data['number1'];
        }
        else{
            $this->num1 = 0;
        }
        if ($data['number2']){
            $this->num2 = $data['number2'];
        }
        else{
            $this->num2 = 0;
        }
        $this->choice = $data['choice'];


    }
    public function add(){
        return $this->num1 + $this->num2;
    }
    public function sub(){
        return $this->num1 - $this->num2;
    }
    public function multi(){
        return $this->num1 * $this->num2;
    }
    public function div(){
        return $this->num1 / $this->num2;
    }
    public function modulus(){
        return $this->num1 % $this->num2;
    }
    public function calculator(){
        switch ($this->choice){
            case '+' : $this->result = $this->add();
            break;
            case '-' : $this->result = $this->sub();
            break;
            case '*' : $this->result = $this->multi();
            break;
            case '/' : $this->result = $this->div();
            break;
            case '%' : $this->result = $this->molulus();
            break;
        }
        return $this->result;
    }

}