<?php


namespace App\classes;


class Products
{
    public $products = [];
    public function getAllProducts (){
        $this->products = [
            0 => [
                'id' => 1,
                'name' => 'New red Saree',
                'price' => '12000',
                'image' => 'sharee.jpg',
                'description' => 'New red saree description.........'

            ],
            1 => [
                'id' => 2,
                'name' => 'Jamdani Saree',
                'price' => '15000',
                'image' => '1.jpg',
                'description' => 'New Jamdani saree description.........'
            ],
            2 => [
                'id' => 3,
                'name' => 'Katan Saree',
                'price' => '15000',
                'image' => '2.jpg',
                'description' => 'New Katan saree description.........'
            ],
            3 => [
                'id' => 4,
                'name' => 'New White Shirt',
                'price' => '1200',
                'image' => '3.jpg',
                'description' => 'New White Shirt description.........'
            ],
            4 => [
                'id' => 5,
                'name' => 'New ATM Lungi',
                'price' => '500',
                'image' => '4.jpg',
                'description' => 'New ATM Lungi description.........'
            ],
            5 => [
                'id' => 6,
                'name' => 'New White Shoe',
                'price' => '5000',
                'image' => '5.jpg',
                'description' => 'New White Shoe description.........'
            ]
        ];
        return $this->products;
    }

}