<?php


namespace App\classes;


class Products
{
    public $products;
    public $result = [];
    public function getAllproducts(){
            return [
                0 => [
                    'id' => 1,
                    'category_id' => 2,
                    'name' => 'Yello Sharee',
                    'price' => '15000',
                    'image' => 'Yellow.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                1 => [
                    'id' => 2,
                    'category_id' => 2,
                    'name' => 'Red Sharee',
                    'price' => '5000',
                    'image' => 'sharee.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                2 => [

                        'id' => 3,
                        'category_id' => 2,
                        'name' => 'Blue Sharee',
                        'price' => '5000',
                        'image' => 'blue.jpg',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                3 => [

                        'id' => 4,
                        'category_id' => 2,
                        'name' => 'New Three Piece',
                        'price' => '5000',
                        'image' => '3 piece.jpg',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                4 => [

                        'id' => 5,
                        'category_id' => 1,
                        'name' => 'New Shirt',
                        'price' => '5000',
                        'image' => '3.jpg',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                5 => [

                        'id' => 6,
                        'category_id' => 1,
                        'name' => 'Man Shoe',
                        'price' => '5000',
                        'image' => '5.jpg',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                6 => [

                        'id' => 7,
                        'category_id' => 1,
                        'name' => 'Lungi',
                        'price' => '5000',
                        'image' => '4.jpg',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                7 => [

                        'id' => 2,
                        'category_id' => 3,
                        'name' => 'Kid Shirt',
                        'price' => '5000',
                        'image' => 'kid shirt.jpg',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                8 => [

                    'id' => 2,
                    'category_id' => 3,
                    'name' => 'Kid pant',
                    'price' => '5000',
                    'image' => 'kid pant.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                9 => [

                    'id' => 2,
                    'category_id' => 4,
                    'name' => 'Mobile',
                    'price' => '5000',
                    'image' => 'electronics1.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ],
                10 => [

                    'id' => 2,
                    'category_id' => 4,
                    'name' => 'Air Condition',
                    'price' => '5000',
                    'image' => 'electronics2.jpg',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt eaque enim esse eveniet excepturi inventore iusto'
                ]
            ];
}
    public function getProductsByCategoryId($categoryId){
        $this->products = $this->getAllproducts();
        foreach ($this->products as $product){
            if ($product['category_id'] == $categoryId){
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }


}