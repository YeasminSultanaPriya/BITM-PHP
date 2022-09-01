<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $students;
    public function ys(){
        return view('ys');
    }
    public function master(){
        return view('home');
    }
    public function about(){
        return view('about.about');
    }
    public function home(){
        return view('home.home');
    }
    public function students(){
        $this->students = Student::students();
        return view('students.student',[
            'students' =>$this->students
        ]);
    }
}
