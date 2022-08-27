<?php

require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\News;
use App\classes\Auth;


if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        include 'pages/home.php';
    }
    elseif($_GET['page'] == 'categoryNews'){
        include 'pages/categoryNews.php';
    }
    elseif($_GET['page'] == 'ManageNews'){
        $news = new News();
        $newses = $news->getAllNews();
        include 'pages/ManageNews.php';
    }
    elseif ($_GET['page'] == 'login'){
        include "pages/login.php";
    }
    elseif($_GET['page'] == 'logout'){
        $auth = new Auth();
        $auth->logout();
    }
}
elseif(isset($_POST['btn'])){
    
    if($_POST['btn'] == 'Save News'){
        $news = new News($_POST, $_FILES);
         $message = $news->saveNewsUpdate();
        include 'pages/categoryNews.php';

    }
}
    elseif (isset($_POST['login_btn'])){

    $login = new Auth($_POST);
    $message = $login->login();
    include 'pages/login.php';
}



