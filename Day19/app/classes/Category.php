<?php


namespace App\classes;


class Category
{
    public function getAllCategories(){
        return [
            0 => [
                'id' => 1,
                'name' => 'Men Fashion'
            ],
            1 => [
                'id' => 2,
                'name' => 'Women Fashion'
            ],
            2 => [
                'id' => 3,
                'name' => 'Kid Fashion'
            ],
            3 => [
                'id' => 4,
                'name' => 'Electronics'
            ]
        ];

    }

}