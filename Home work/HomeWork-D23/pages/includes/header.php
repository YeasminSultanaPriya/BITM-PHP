<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/all.css">
    <link rel="stylesheet" href="assests/css/helper.css">
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a href="" class=""><i class="fa-solid fa-magnifying-glass fa-2x text-dark m-2"></i></a>
        <a href="action.php?page=home" class="navbar-brand mx-auto"><img src="assests/images/Prothom-Alo-logo.jpg" style="height: 80px" alt="logo"></a>
        <ul class="navbar-nav ms-auto">
            <li><a href="action.php?page=home" class="nav-link btn btn-light text-dark "><i class="fa-regular fa-bell fa-2x"></i></a></li>
            <li><a href="action.php?page=home" class="nav-link btn btn-bg-light text-primary f-s-16 fw-semibold">Login</a></li>
    
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <ul class="navbar-nav mx-auto">
        <?php foreach ($categories as $category){ ?>
            <li><a href="action.php?page=category&&category-id=<?php echo $category['id'] ?>" class="nav-link text-dark"><?php echo $category['name']?></a></li>
            <?php } ?>
           
        </ul> 
    </div>
</nav>
