<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $students;
    public function in()
    {
       return view('masterOne');
//        return 'Beautiful Home';
    }
    public function about()
    {
        return view('about.about');//1st about is folder ,2nd about is file

    }
    public function home(){
        return view('home.home');
    }
    public function students()
    {
//       return Student::students();
       $this->students = Student::students();
       return view('students.student',[
           'students' =>$this->students,
       ]);
    }

}
