<?php

require_once 'vendor/autoload.php';

use App\classes\Student;
use App\classes\Auth;

if (isset($_GET['page']))
{
    if ($_GET['page'] == "home")
    {
        include "pages/home.php";
    } elseif ($_GET['page'] == 'create-student')
    {
        include "pages/create-student.php";
    } elseif ($_GET['page'] == 'manage-student')
    {
        $student = new Student();
        $students = $student->getAllStudentInfo();
        include "pages/manage-student.php";
    } elseif ($_GET['page'] == 'login')
    {
        include "pages/login.php";
    } elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
} elseif (isset($_POST['btn']))
{
    $student = new Student($_POST, $_FILES);
    $message = $student->saveStudentInfo();
    include "pages/create-student.php";
} elseif (isset($_POST['login_btn']))
{
    $login = new Auth($_POST);
    $message = $login->login();
    include "pages/login.php";
}