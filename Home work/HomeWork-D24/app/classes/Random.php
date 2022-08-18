<?php
namespace App\classes;



class Random{

    public $values, $result;
    public $array = [];
    public function __construct($data = null)
    { 
        if($data){
            $this->values = $data['choice'];

        }
        
    }
    public function getArrayData(){
        for($i = 10; $i<=18; $i++){
            array_push($this->array, rand(10,100));
        }
        return $this->array;

    }

    public function sumOfArray(){
        foreach ($this->values as $value){
        $this->result +=$value;
        }
        return $this->result;

    }
}