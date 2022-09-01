<?php
namespace App\classes;

class Category{
    public function getAllCategories(){
        return [
            0 => [
                'id' => 1,
                'name' => 'সর্বশেষ'
            ],
            1 => [
                'id' => 2,
                'name' => 'বিশেষ সংবাদ'
            ],
            2 => [
                'id' => 3,
                'name' => 'রাজনীতি'
            ],
            3 => [
                'id' => 4,
                'name' => 'করোনাভাইরাস'
            ],
            4 => [
                'id' => 5,
                'name' => 'বাংলাদেশ'
            ],
            5 => [
                'id' => 6,
                'name' => 'বিশ্ব'
            ],
            6 => [
                'id' => 7,
                'name' => 'বাণিজ্য'
            ],
            7 => [
                'id' => 8,
                'name' => 'মতামত'
            ],
            8 => [
                'id' => 9,
                'name' => 'খেলা'
            ],
            9 => [
                'id' => 10,
                'name' => 'বিনোদন'
            ],
            10 => [
                'id' => 11,
                'name' => 'চাকরি'
            ],
            11 => [
                'id' => 12,
                'name' => 'জীবনযাপন'
            ]
        ];
    }
}