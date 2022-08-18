<?php


namespace App\classes;


class Word
{
    public $givenString, $totalWord, $totalChar, $result = [];
    public function __construct($data=null)
    {
        if($data){
            $this->givenString = $data['given_string'];
        }

    }
    public function getStringInfo(){
        $this->totalWord = str_word_count($this->givenString);
        $this->totalChar = strlen($this->givenString);

        $this->result = [
            'given_string' => 'Given String -' .$this->givenString ,
            'total_word' => 'Total Word -' . $this->totalWord,
            'total_char' => 'Total Char -' . $this->totalChar
        ];
        return $this->result;

    }


}