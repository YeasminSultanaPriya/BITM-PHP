<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Products;

$category = new Category();
$categories = $category->getAllCategories();

if (isset($_GET['page'])){
    if ($_GET['page'] == 'home'){
        $product = new Products();
        $products = $product->getAllproducts();
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'category-products'){
        $categoryId = $_GET['id'];
        $product = new Products();
        $products = $product->getProductsByCategoryId($categoryId);

        include 'pages/categoryProducts.php';
    }
}
