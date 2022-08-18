<?php

//echo "hello world";

//
//jannat();
//
//function jannat ()
//
//{
//    echo 'hello Jannat';
//}

//
//require_once  'app\classes\HomePage.php';
//require_once  'app\classes\student.php';

require_once 'vendor/autoload.php';

use App\classes\HomePage;
use App\classes\student;

$name = new HomePage();


$lastname = new student();



$name ->name().
$lastname -> lastname();

?>