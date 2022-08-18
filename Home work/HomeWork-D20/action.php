<?php


require_once 'vendor/autoload.php';

use App\classes\Category;
use App\classes\News;

$category =new Category();
$categories = $category->getAllCategories();

if (isset($_GET['page'])){
    if ($_GET['page']=='home'){
        $news = new News();
        $newses = $news->getAllNews();
        include 'pages/home.php';

}
elseif ($_GET['page'] == 'category'){
    $categoryId = $_GET['category-id'];
    $news = new News();
    $categoryNewses = $news->getNewsByCategoryId($categoryId);
    include 'pages/categoryNews.php';
}

elseif ($_GET['page'] == 'news-details'){
    $newsId = $_GET['id'];
    $news = new News();
    $newsDetails = $news->getNewsDetails($newsId);
    include 'pages/news-details.php';
}
   
}
