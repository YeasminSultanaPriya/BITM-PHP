<?php
namespace App\classes;

class News{
    public $image, $imageName, $imageDirectory;
    public $headline, $reporter, $published, $description;
    public $file, $filePath;
    public function __construct($post, $file){
        $this->image = $file['image'];
        $this->headline = $post['headline'];
        $this->reporter = $post['reporter'];
        $this->published = $post['published'];
        $this->description = $post['description'];

    }
    
    public function saveNewsUpdate(){
         $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/images/upload/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);

        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a+');
        fwrite($this->file, "$this->headline, $this->imageDirectory, $this->reporter, $this->published, $this->description");
        fclose($this->file);

    }
}

    