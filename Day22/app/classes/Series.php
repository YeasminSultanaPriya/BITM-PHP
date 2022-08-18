<?php


namespace App\classes;


class Series
{
    public $startingNumber, $endingNumber, $result;

    public function __construct($post)
    {
        if ($post['starting_number']){
            $this->startingNumber = $post['starting_number'];
        }
        else{
            $this->startingNumber = 0;
        }
        if ($post['ending_number']){
            $this->endingNumber = $post['ending_number'];
        }
        else{
            $this->endingNumber = 0;
        }

//        $this->startingNumber = $post['starting-number'];
//        $this->endingNumber = $post['ending-number'];
    }

    public function series()
    {
        if ($this->startingNumber < $this->endingNumber) {
            for ($this->startingNumber; $this->startingNumber <= $this->endingNumber; $this->startingNumber++) {
                $this->result .= $this->startingNumber . ' ';
            }
        } elseif ($this->startingNumber > $this->endingNumber) {
            for ($this->endingNumber; $this->endingNumber <= $this->startingNumber; $this->endingNumber++) {
                $this->result .= $this->startingNumber . ' ';

            }
        }
        return $this->result;

    }
}