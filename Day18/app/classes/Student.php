<?php


namespace App\classes;


class Student
{
    public $students;
    public $htmlContent;
    public function __construct()
    {
        $this->students = [
            0 => [
                'id' => 1,
                'name' => 'Karim',
                'email' => 'karim@gmail.com',
                'phone' => '10245787',
                'address' => 'Dhaka'
            ],
            1 => [
                'id' => 2,
                'name' => 'Rahim',
                'email' => 'rahim@gmail.com',
                'phone' => '410245787',
                'address' => 'Dhaka'
            ],
            2 => [
                'id' => 3,
                'name' => 'Salman',
                'email' => 'salman@gmail.com',
                'phone' => '015245787',
                'address' => 'Dhaka'
            ],
            3 => [
                'id' => 4,
                'name' => 'Alam',
                'email' => 'alam@gmail.com',
                'phone' => '0162245787',
                'address' => 'Dhaka'
            ]
        ];

    }
    public function getAllStudents(){
        return $this->students;
    }
    public function appendHtml(){

        $this->htmlContent .= '<html>';
        $this->htmlContent .= '<head>';
        $this->htmlContent .= '</head>';
        $this->htmlContent .= '<body>';
        $this->htmlContent .= '<table border="1">';
        $this->htmlContent .= '<tr>';
        $this->htmlContent .= '<th> id </th>';
        $this->htmlContent .= '<th> name </th>';
        $this->htmlContent .= '<th> email </th>';
        $this->htmlContent .= '<th> phone </th>';
        $this->htmlContent .= '<th> address </th>';
        $this->htmlContent .= '</tr>';
        foreach ($this->students as $student){
            $this->htmlContent .= '<tr>';
            $this->htmlContent .= '<td>'.$student['id'].'</td>';
            $this->htmlContent .= '<td>'.$student['name'].'</td>';
            $this->htmlContent .= '<td>'.$student['email'].'</td>';
            $this->htmlContent .= '<td>'.$student['phone'].'</td>';
            $this->htmlContent .= '<td>'.$student['address'].'</td>';

            $this->htmlContent .= '</tr>';
        }

        $this->htmlContent .= '<table>';
        $this->htmlContent .= '</body>';
        $this->htmlContent .= '</html>';

        echo $this->htmlContent;

    }

}