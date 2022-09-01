<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public $result;
    public function calculator(){
        return view('calculator.calculator');
    }
    public function getResult(Request $request){
        switch ($request->choice){
            case '+': $this->result = $request->first_number + $request->second_number;
            break;
            case '-': $this->result = $request->first_number - $request->second_number;
            break;
            case '*': $this->result = $request->first_number * $request->second_number;
            break;
            case '/': $this->result = $request->first_number / $request->second_number;
            break;
            case '%': $this->result = $request->first_number % $request->second_number;
            break;
        }


        return redirect()->back()->with('result',$this->result);

    }

}
