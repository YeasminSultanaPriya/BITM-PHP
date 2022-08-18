<?php


namespace App\classes;


class Calculator
{
    public $firstNum, $lastNum, $result;
    public function __construct($postArraydata)
    {
        $this->firstNum = $postArraydata['first_number'];
        $this->lastNum = $postArraydata['last_number'];
        $this->operator = $postArraydata['choice'];
    }
    public function getCalculator(){
        if(!empty($this->firstNum) && !empty($this->lastNum)){
            if($this->operator =='+')
            return $this->firstNum + $this->lastNum;
        }

    }

}