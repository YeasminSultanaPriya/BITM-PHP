<?php


namespace App\classes;


class ArrayData
{
    public $values,$result;
    public $randomNumbers = [];

    public function __construct($post = null)
    {
       if ($post){
           $this->values = $post['choice'];

       }
    }

    public function getArrayData(){
        for ($i = 10; $i<=18; $i++){
            array_push($this->randomNumbers, rand(10,99));
        }
        return $this->randomNumbers;
//        return [34,56,35,25,60,23];
    }

    public function getSumOfNumbers(){
        foreach ($this->values as $value){
            $this->result += $value;
        }
        return $this->result;

    }

}