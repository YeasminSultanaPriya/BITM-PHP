<?php
namespace App\classes;

class News{
    public $image, $imageName, $imageDirectory, $imagePath;
    public $headline, $reporter, $published, $description;
    public $file, $filePath, $fileContent;
    public $array, $array1, $array2;
    public function __construct($post=null,$file=null){
        if($_POST){
            if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])){
                $this->image = $file['image'];

            }
            
        }
        if($post){
            $this->headline = $post['headline'];
            $this->reporter = $post['reporter'];
            $this->published = $post['published'];
            $this->description = $post['description'];
        }

    }
    
    public function saveNewsUpdate(){
        if(isset($this->file)){
        $this->imagePath = $this->uploadImage();
        } else{
            $this->imagePath = null;
        }
        $this->filePath = 'db/db.txt';
        $this->file = fopen($this->filePath, 'a');
        $this->fileContent = "$this->headline, $this->imagePath, $this->description, $this->reporter, $this->published$" ;
        fwrite($this->file, $this->fileContent);
        fclose($this->file);
        return 'News Updated Successfully';
       

        }

    public function uploadImage(){

        $this->imageName = time().$this->image['name'];
        $this->imageDirectory = 'assets/images/upload/' . $this->imageName;
        move_uploaded_file($this->image['tmp_name'], $this->imageDirectory);
        return $this->imageDirectory;
    }

    public function getAllNews(){
        $this->filePath = 'db/db.txt';
        $this->fileContent = file_get_contents($this->filePath);
        $this->array = explode('$', $this->fileContent);
        foreach ($this->array as $key => $item){
            $this->array1 = explode(',' , $item);

            if($this->array1[0]){
                $this->array2[$key]['headline'] = $this->array1[0];
                $this->array2[$key]['image'] = $this->array1[1];
                $this->array2[$key]['description'] = $this->array1[2];
                $this->array2[$key]['reporter'] = $this->array1[3];
                $this->array2[$key]['published'] = $this->array1[4];
                
            }
        }

        return $this->array2;


        }
        
    
}

    