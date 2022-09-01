<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    public $result;
    public function index(){
        return view('full-name.index');
    }
    public function getFullName(Request $request){
       $this->result = $request->first_name. ' ' .$request->last_name;
       return redirect()->back()->with('result',$this->result);

    }
}
