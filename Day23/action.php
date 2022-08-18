<?php


    require_once 'vendor/autoload.php';
    use App\classes\Home;
    use App\classes\Student;

    if (isset($_GET['page'])){
        if ($_GET['page']=='home'){
            include 'pages/home.php';
        }
        elseif ($_GET['page']=='student-information'){
            include 'pages/student-information.php';
        }
        elseif ($_GET['page']=='create'){
            include 'pages/create.php';
        }
    }
    elseif (isset($_POST['student_info_btn'])){
        $student = new Student($_POST, $_FILES);
        $message = $student->saveStudentInfo();
        include 'pages/create.php';
    }
