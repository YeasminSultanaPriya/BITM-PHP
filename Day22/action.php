<?php
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Calculator;
use App\classes\Series;

if (isset($_GET['page'])){
    if ($_GET['page']=='home'){
        include 'pages/home.php';
    }
    if ($_GET['page']=='calculator'){
        include 'pages/calculator.php';
    }
    if ($_GET['page']=='series'){
        include 'pages/series.php';
    }
}
elseif (isset($_POST['calculator-btn'])){
    $calculator = new Calculator($_POST);
    $result = $calculator->calculator();
    include 'pages/calculator.php';
}
elseif (isset($_POST['series-btn'])){
    $series = new Series($_POST);
    $result = $series->series();
    include 'pages/series.php';
}
