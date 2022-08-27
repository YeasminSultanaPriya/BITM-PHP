<?php
require_once 'vendor/autoload.php';
use App\classes\News;

if (isset($_GET['page'])) {
    if ($_GET['page'] == "home")
    {
        include "pages/home.php";
    }

    elseif ($_GET['page'] == "create-news")
    {
        include "pages/createNews.php";
    }
    elseif ($_GET['page'] == "manage-news")
    {
        $news = new News();
        $allNews = $news->getAllNewsInfo();
        include "pages/manageNews.php";
    }

}
elseif (isset($_POST['btn']))
{
    $news = new News($_POST,$_FILES);
    $message = $news->saveNewsInfo();
    include "pages/createNews.php";
}
