<?php


namespace App\classes;


class Student
{
    public $image, $imageName, $imageDirectory;
    public $name, $email, $phone, $description;
    public $file, $filePath;
    public function __construct($post,$file)
    {
        $this->image = $file['image'];
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];
        $this->description = $post['description'];


    }
    public function saveStudentInfo(){
        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/images/upload/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a+');
        fwrite($this->file, "$this->name, $this->email, $this->phone,$this->imageDirectory, $this->description");
        fclose($this->file);
    }

}