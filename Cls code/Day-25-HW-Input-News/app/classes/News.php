<?php

namespace App\classes;

class News
{
    public $heading,$description;
    public $image;
    public $imageName,$imageDirectory,$imagePath;
    public $file,$filePath,$fileContent;
    public $array,$array1,$array2;
    public function __construct($post=null,$file =null)
    {
        if ($post)
        {
            $this->heading =$post['heading'];
            $this->description =$post['description'];


        }
        if ($file)
        {
            $this->image = $file['image'];
        }


//        echo '<pre>';
////        print_r($file);//file contains all image information
//        echo $file['image']['tmp_name'];
//        exit();

    }
    public function saveNewsInfo()
    {
        $this->imagePath = $this->uploadNewsImage();

//       echo $this->imageDirectory;
//       exit();
        $this->filePath = 'db/db.txt';
        $this->file= fopen($this->filePath,'a');
        $this->fileContent = "$this->imagePath,$this->heading,$this->description$";
//        echo $this->fileContent;//only show the submitted info of the student.
//        exit();
//        echo $this->fileContent;
//        exit();
        fwrite($this->file,$this->fileContent);
        fclose($this->file);
        return 'News Info Saved Successfully';
    }
    public function uploadNewsImage()
    {
        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($this->image['tmp_name'],$this->imageDirectory);
        return $this->imageDirectory;
    }
    public function getAllNewsInfo()
    {
        $this->filePath = 'db/db.txt' ;
//        echo $this->filePath;
//        exit();
        $this->fileContent = file_get_contents($this->filePath);//show all contents of the file.

        $this->array = explode('$', $this->fileContent);
//        echo '<pre>';
//            print_r($this->array);
//             exit();
        foreach ($this->array as $key => $item)
        {
            $this->array1 =explode(',',$item);
//            echo '<pre>';
//            print_r($this->array1);
            if ($this->array1[0])
            {
                $this->array2[$key] ['image'] = $this->array1[0];
                $this->array2[$key] ['heading'] = $this->array1[1];
                $this->array2[$key] ['description'] = $this->array1[2];

            }
        }

        return $this->array2;

//        exit();
//        echo $this->fileContent;
//        exit();
//        echo gettype($this->fileContent);
//        echo '<pre>';
//        print_r($this->array);
//        exit();


    }


}