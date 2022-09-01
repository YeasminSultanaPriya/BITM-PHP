<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public static function Students(){
        return [
            0=> [
                'id' =>1,
                'name' => 'YS',
                'phone' => '01245258769',
                'address' => 'Dhaka',
                'image' => 'assets/images/1.jpg'
            ],
            1=> [
                'id' =>2,
                'name' => 'Yeasmin',
                'phone' => '01245258769',
                'address' => 'Dhaka',
                'image' => 'assets/images/2.jpg'
            ],
            2=> [
                'id' =>3,
                'name' => 'Jesmin',
                'phone' => '01245258769',
                'address' => 'Dhaka',
                'image' => 'assets/images/3.jpg'
            ],
            3=> [
                'id' =>4,
                'name' => 'Yeamin',
                'phone' => '01538258769',
                'address' => 'Dhaka',
                'image' => 'assets/images/4.jpg'
            ]
        ];
    }
}
