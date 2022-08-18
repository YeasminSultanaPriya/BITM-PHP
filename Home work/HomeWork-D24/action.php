<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\News;
use App\classes\Random;

if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'random'){
        $random = new Random();
        $randoms = $random->getArrayData();
        include 'pages/random.php';
    }
    elseif($_GET['page'] == 'categoryNews'){
        include 'pages/categoryNews.php';
    }
}
elseif(isset($_POST['btn'])){
    if($_POST['btn'] == 'Get Value'){
        $random = new Random($_POST);
        $randoms = $random->getArrayData();
        $result = $random->sumOfArray();
        include 'pages/random.php';
    }
    elseif($_POST['btn'] == 'Save News'){
        $news = new News($_POST, $_FILES);
        $news->saveNewsUpdate();
        include 'pages/categoryNews.php';

    }
}


