<?php
require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Student;

if (isset($_GET['page'])){
    if ($_GET['page']=='home'){
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'student-info'){
        include 'pages/student-info.php';
    }
    elseif ($_GET['page'] =='manage-student'){
        $student = new Student();
        $students = $student->getAllStudentInfo();
        include 'pages/manage-student.php';
    }

}
elseif (isset($_POST['btn'])){
        $student = new Student($_POST, $_FILES);
        $message = $student->saveStudentInfo();
        include 'pages/student-info.php';

}
