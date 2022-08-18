<?php


namespace App\classes;


class Product
{
    public $products;
    public $result =[];
    public function getAllProducts(){
        return [
            0=> [
                'id' => 1,
                'category_id' =>2,
                'name' =>'New Yellow Sharee',
                'price' => '12000',
                'image' => 'Yellow.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            1=> [
                'id' => 2,
                'category_id' =>2,
                'name' =>'Navy Blue Sharee',
                'price' => '15000',
                'image' => 'blue.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            2=> [
                'id' => 3,
                'category_id' =>3,
                'name' =>'Kids Shirt',
                'price' => '1200',
                'image' => 'kid shirt.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            3=> [
                'id' => 4,
                'category_id' =>3,
                'name' =>'Kids Pant',
                'price' => '1000',
                'image' => 'kid pant.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            4=> [
                'id' => 5,
                'category_id' =>4,
                'name' =>'Air Condition',
                'price' => '120000',
                'image' => 'electronics2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            5=> [
                'id' => 6,
                'category_id' =>1,
                'name' =>'New White Shirt',
                'price' => '10000',
                'image' => '3.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            6=> [
                'id' => 7,
                'category_id' =>2,
                'name' =>'Blue Sharee',
                'price' => '5000',
                'image' => '1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            7=> [
                'id' => 8,
                'category_id' =>1,
                'name' =>'ATM Lungi',
                'price' => '500',
                'image' => '4.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            8=> [
                'id' => 9,
                'category_id' =>2,
                'name' =>'Red Sharee',
                'price' => '3000',
                'image' => 'sharee.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            9=> [
                'id' => 10,
                'category_id' =>1,
                'name' =>'shoe',
                'price' => '2000',
                'image' => '5.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            10=> [
                'id' => 11,
                'category_id' =>4,
                'name' =>'Mobile',
                'price' => '22000',
                'image' => 'electronics1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates..............'
            ],
            11=> [
                'id' => 12,
                'category_id' =>2,
                'name' =>'Green Sharee',
                'price' => '2400',
                'image' => 'green.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates.'
            ],
            12=> [
                'id' => 13,
                'category_id' =>2,
                'name' =>'Jamdani Sharee',
                'price' => '2600',
                'image' => '2.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates.'
            ],
            13=> [
                'id' => 14,
                'category_id' =>1,
                'name' =>'Navy Blue Shirt',
                'price' => '2600',
                'image' => 'navy blue shirt.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates.'
            ],
            14=> [
                'id' => 15,
                'category_id' =>1,
                'name' =>'Maroon Shirt',
                'price' => '2600',
                'image' => 'check shirt.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptates.'
            ],
        ];

    }
    public function getProductsByCategoryId($categoryId){
        $this->products = $this->getAllProducts();
        foreach ($this->products as $product){
            if ($product['category_id'] == $categoryId){
                array_push($this->result,$product);
            }

        }
        return $this->result;
    }
    public function getProductDetails($productId){
        $this->products = $this->getAllProducts();
        foreach ($this->products as $product){
            if ($product['id']==$productId){
                return $product;
            }

        }
    }

}