<?php
require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Random;
use App\classes\ArrayData;
use App\classes\Word;


if (isset($_GET['page'])){
    if ($_GET['page']=='home'){
        include 'pages/home.php';
    }
    elseif ($_GET['page']=='random'){
        $data = new ArrayData();
        $datas= $data->getArrayData();
        include 'pages/random.php';
    }
    elseif ($_GET['page'] == 'word-count'){
        include 'pages/word-count.php';
    }

}
elseif (isset($_POST['btn'])){
    if ($_POST['btn'] == 'Get Result'){
        $data = new ArrayData($_POST);
        $datas= $data->getArrayData();
        $result = $data->getSumOfNumbers();
        include 'pages/random.php';

    }elseif ($_POST['btn'] == 'Get Word Count Result'){
        $word = new Word($_POST);
        $result = $word->getStringInfo();
        include 'pages/word-count.php';
    }
}
else{
    $home = new Home();
    $home->index();
}

