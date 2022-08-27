<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/all.css" />
    <style>
        .custom-margin-top {
            margin-top: 150px;
        }
    </style>
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="action.php?page=home" class="nav-link">Home</a></li>
                <li><a href="action.php?page=manage-student" class="nav-link">Manage Student</a></li>
                <li><a href="action.php?page=create-student" class="nav-link">Create Student</a></li>
                <li><a href="" class="nav-link">Contact</a></li>
                <li><a href="action.php?page=logout" class="nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
<?php } ?>