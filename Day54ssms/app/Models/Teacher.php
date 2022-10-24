<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','phone','address','image','description', 'status'];

    public static function createOrUpdateTeacher($request, $userId, $id = null){
        Teacher::updateOrCreate(['id'=>$id],[
            'user_id' => $userId,
            'phone' => $request->phone,
            'address'=> $request->address,
            'description' => $request->description,
            'status' => $request->status,
            'image' => $request->image
        ]);
    }
}
