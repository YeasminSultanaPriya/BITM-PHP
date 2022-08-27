<?php


namespace App\classes;


class Student
{
    public $name, $email, $phone, $address;
    public $image;
    public $imageName;
    public $imageDirectory;
    public $imagePath;

    public $file, $filePath, $fileContent;

    public $array,$array1,$array2;

    public function __construct($post = null, $file = null)
    {
        if ($post)
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->phone = $post['phone'];
            $this->address = $post['address'];
        }
        if ($file)
        {
            $this->image = $file['image'];
        }
    }

    public function saveStudentInfo()
    {
        $this->imagePath = $this->uploadStudentImage();
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->name,$this->email,$this->phone,$this->address,$this->imagePath$";
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'student info saved successfully';
    }

    public function uploadStudentImage()
    {
        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

    public function getAllStudentInfo ()
    {
        $this->filePath = 'db/db.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = explode('$', $this->fileContent);
        foreach ($this->array as $key => $item)
        {
            $this->array1 = explode(',', $item);

            if ($this->array1[0])
            {
                $this->array2[$key] ['name']    = $this->array1[0];
                $this->array2[$key] ['email']    = $this->array1[1];
                $this->array2[$key] ['phone']    = $this->array1[2];
                $this->array2[$key] ['address']    = $this->array1[3];
                $this->array2[$key] ['image']    = $this->array1[4];
            }
        }
       return $this->array2;
    }
}