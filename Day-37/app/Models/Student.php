<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;//works with database
    public static function students()
    {

        return [
            0=>[
                'id'=>1,
                'name'=>'Sabrina',
                'phone'=>'03890890',
                'address'=>'Dhaka',
                'image'=>'assets/img/1.jpg',
            ],
            1=>[
                'id'=>2,
                'name'=>'Rina',
                'phone'=>'79878290',
                'address'=>'Chandpur',
                'image'=>'assets/img/2.jpg',

            ],
            2=>[
                'id'=>3,
                'name'=>'Mina',
                'phone'=>'0389088290',
                'address'=>'Rajshahi',
                'image'=>'assets/img/3.jpg',
            ],
            3=>[
                'id'=>4,
                'name'=>'Mariyam',
                'phone'=>'030890',
                'address'=>'Khulna',
                'image'=>'assets/img/4.jpg',
            ],
        ];
    }
}
