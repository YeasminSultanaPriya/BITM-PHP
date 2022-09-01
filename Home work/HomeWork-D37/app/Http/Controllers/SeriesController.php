<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public $result;
    public function series(){
        return view('Series.series');
    }
    public function getResult(Request $request){
        if ($request->first_number < $request->last_number) {
            for ($request->fisrt_number; $request->first_number <= $request->last_number; $request->first_number++) {
                $this->result .= $request->first_number . ' ';
            }

    }
    return redirect()->back()->with('result',$this->result);
}
    
}