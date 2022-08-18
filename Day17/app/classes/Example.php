<?php


namespace App\classes;


class Example
{
    public $message;
    public $x=10;
    public $y=20;
    public $z=30;

    public function __construct()
    {
        $this->message = 'Hello world';
    }
    public function index(){
        //echo $this->message;
################# array ############
       /* $this->student = [];
        $this->student = [10, 20, 'Joy', 'BITM', true, 20.3, false, 25];
        echo $this->student[4];

        print_r($this->student);
        var_dump($this->student);*/

        $this->student = [];
        $this->student = [
            0 =>[
                'name' => 'Sabbir',
                'email' => 'sabbir@gmail.com',
                'phone' => '09345754646'
            ],
            1 => ['name' => 'Masud',
                'email' => 'sabbir@gmail.com',
                'phone' => '6932964646'],
            2=> ['name' => 'YS',
                'email' => 'sabbir@gmail.com',
                'phone' => '1232454646']
        ];

//        echo $this->student[0]['name'];
        /*foreach ($this->student[0] as $value ){
            echo $value . '<br/>';
        }*/

        /*foreach ($this->student[0] as  $index => $value ){
            echo 'index is ' . $index . ' and value is ' . $value . '<br/>';
        }*/

        foreach ($this->student as $item){
            echo $item['name'].'<br/>';
            echo $item['email'].'<br/>';
        }

        /*echo '<pre>';
        print_r($this->student);
        echo '</pre>';*/

        /*$this->student[0] = '0124563';
        $this->student['name'] = 'Taskin';
        echo $this->student['name'];*/


        //logical operator ( &&, ||, ! )
        /*
        echo '<br/>';
        echo ($this->x < $this->y) && ($this->y < $this->z); //true
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y < $this->z); //false
        echo '<br/>';
        echo ($this->x < $this->y) && ($this->y > $this->z); //false
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y > $this->z); //false

        echo '<br/>';
        echo ($this->x < $this->y) || ($this->y < $this->z); //true
        echo '<br/>';
        echo ($this->x > $this->y) || ($this->y < $this->z); //true
        echo '<br/>';
        echo ($this->x < $this->y) || ($this->y > $this->z); //true
        echo '<br/>';
        echo ($this->x > $this->y) || ($this->y > $this->z); //false

        $this->x = false;
        echo !$this->x; //true
        */


        //single line statement
       /* $this->x = 'hello';*/

       #############    conditional statement (if)      #############

        /*if($this->x < $this->y){
            echo 'Hello YS';
        }*/

        ########    (if-else)     ##########
       /*
            if($this->x > $this->y){
                echo 'Hello YS';
            }
            else{
                echo "hello Bangladesh";
        }*/

        ########     (if-elseif) => it will execute only one true conditional block     ##########
       /*
           if($this->x > $this->y){
                echo 'Hello YS';
            }
            elseif($this->y < $this->z) {
                echo "hello Bangladesh";
            }
            elseif ($this->x > $this->z){
                echo "hello Taskin";
            }
            else{
                echo "Bye";
            }
       */

        ########     (switch)    ##########
        /*
                switch ($this->z){
                case 10 : echo 'YS';
                        break;
                case 20 : echo 'Hello YS';
                        break;
                case 30 : echo "Hello Bangladesh";
                        break;
                case 40 : echo "hello BITM";
                        break;
                case 50 : echo 'hello Basis';
                        break;
                default : echo 'Bye bye man';
               }
        */

        ########     repeated statement(for)    ##########

            /*
              for($this->x; $this->x <=20; $this->x++){
                echo '<br/>';
                echo $this->x .". " . 'Hello world';

                if ($this->x == 15){
                    break;
                }
            }
            */

        ########     repeated statement(while)    ##########

        /*
           while ($this->x < $this->y){
            echo '<br/>';
            echo $this->x;
            $this->x++;
        }
        */

        ########     repeated statement(do-while)    ##########

        /*do {
            echo '<br/>';
            echo $this->x;
            $this->x++;
        }
        while ($this->x > $this->y);*/

    }
}


