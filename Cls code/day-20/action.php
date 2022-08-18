<?php

require_once 'vendor/autoload.php';
use App\classes\Category;
use App\classes\Product;

$category = new Category();
$categories = $category->getAllcategories();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        $product = new Product();
        $products = $product->getAllProducts();
        include "pages/home.php";
    } elseif ($_GET['page'] == 'category')
    {
        $categoryId = $_GET['category-id'];
        $product = new Product();
        $categoryProducts = $product->getProductByCategoryId($categoryId);
        include "pages/categoryProducts.php";
    } elseif ($_GET['page'] == 'product-details')
    {
        $productId = $_GET['id'];
        $product = new Product();
        $productDetails = $product->getProductDetails($productId);
        include 'pages/product-details.php';
    }
}
