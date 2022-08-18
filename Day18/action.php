<?php

require_once 'vendor/autoload.php';
use App\classes\Student;
use App\classes\Products;

if (isset($_GET['page'])){
    if($_GET['page'] == 'home'){
        $student = new Student();
        $students = $student->getAllStudents();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'products'){
        $product = new Products();
        $products = $product->getAllProducts();
        include 'pages/products.php';
    }
}
