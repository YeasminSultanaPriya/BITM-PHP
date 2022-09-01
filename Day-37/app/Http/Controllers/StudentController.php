<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $students,$student;
    public function index()
    {
        return view('name');
    }
    public function student_details($studentId)
    {
//        return $studentId;
        $this->students=Student::students();
        foreach ($this->students as $student)
        {
            if ($student['id']== $studentId)
            {
               $this->student=$student;
            }
        }
        return view('students.details',[
            'student'=>$this->student
            ]);
    }

}
