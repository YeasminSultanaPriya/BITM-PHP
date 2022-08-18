<?php


namespace App\classes;


class Product
{
    public $products;
    public $result = [];

    public function getAllProducts ()
    {
        return [
            0   => [
                'id'    => 1,
                'category_id' => 2,
                'name'  => 'New Yellow Saree',
                'price' => 20000,
                'image' => '21.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
            1   => [
                'id'    => 2,
                'category_id' => 2,
                'name'  => 'New Red Saree',
                'price' => 25000,
                'image' => '22.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
            2   => [
                'id'    => 3,
                'category_id' => 1,
                'name'  => 'New Lungi',
                'price' => 2000,
                'image' => '23.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
            3   => [
                'id'    => 4,
                'category_id' => 2,
                'name'  => 'New Shirt',
                'price' => 5000,
                'image' => '24.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
            4   => [
                'id'    => 5,
                'category_id' => 3,
                'name'  => "kids shirt",
                'price' => 2000,
                'image' => '25.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
            5   => [
                'id'    => 6,
                'category_id' => 3,
                'name'  => 'New kids pants',
                'price' => 2500,
                'image' => '26.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
            6   => [
                'id'    => 7,
                'category_id' => 4,
                'name'  => 'New Mobile',
                'price' => 28000,
                'image' => '27.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet eum excepturi modi mollitia nihil ullam veniam. Aperiam blanditiis corporis doloribus eaque exercitationem harum hic itaque maiores omnis optio, quo, ut.'
            ],
        ];
    }

    public function getProductByCategoryId ($categoryId)
    {
        $this->products = $this->getAllProducts();
        foreach ($this->products as $product)
        {
            if ($product['category_id'] == $categoryId)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }

    public function getProductDetails ($productId)
    {
        $this->products = $this->getAllProducts();

        foreach ($this->products as $product)
        {
            if ($product['id'] == $productId)
            {
                return $product;
            }
        }
    }
}