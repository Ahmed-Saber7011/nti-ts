<?php

namespace app\models;

use app\database\connection;
use app\database\contracts\crud;

class Product extends connection implements crud
{
    private $id, $name_en, $name_ar, $price, $quantity, $code, $image, $status,
        $details_en, $details_ar, $brand_id, $subcategory_id, $created_at, $updated_at;


    
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * @return  self
     */
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * @return  self
     */
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return  self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return  self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    public function getDetails_en()
    {
        return $this->details_en;
    }

    /**
     * @return  self
     */
    public function setDetails_en($details_en)
    {
        $this->details_en = $details_en;

        return $this;
    }
    public function getDetails_ar()
    {
        return $this->details_ar;
    }

    /**
     * @return  self
     */
    public function setDetails_ar($details_ar)
    {
        $this->details_ar = $details_ar;

        return $this;
    }

    
    public function getBrand_id()
    {
        return $this->brand_id;
    }

    /**
     
     * @return  self
     */
    public function setBrand_id($brand_id)
    {
        $this->brand_id = $brand_id;

        return $this;
    }

    
    public function getSubcategory_id()
    {
        return $this->subcategory_id;
    }

    /**
    
     * @return  self
     */
    public function setSubcategory_id($subcategory_id)
    {
        $this->subcategory_id = $subcategory_id;

        return $this;
    }

    
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

   
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function create()
    {
    }
    public function read()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }

    public function getProducts($filter = null)
    {
        $query = "SELECT `id`,`name_en`,`price`,`image`,`details_en` 
        FROM `products_details` WHERE `status` = {$this->status} 
        $filter 
        ORDER BY `price` ASC , `name_en` ASC , `created_at` ASC , `id` ASC";
        return $this->runDQL($query);
    }

    public function find()
    {
        $query = "SELECT * FROM `products_details` WHERE `status` = {$this->status} AND `id` = {$this->id}";
        return $this->runDQL($query);
    }

    public function getReviews()
    {
        $query = "SELECT
                    `reviews`.`product_id`,
                    `reviews`.`rate`,
                    `reviews`.`comments` AS `comment`,
                    `reviews`.`created_at`,
                    CONCAT(
                        `users`.`first_name`,
                        ' ',
                        `users`.`last_name`
                    ) AS `full_name`
                FROM
                    `reviews`
                JOIN `users`
                ON `users`.`id` = `reviews`.`user_id`
                WHERE
                    `product_id` = {$this->id}";
        return $this->runDQL($query);
    }
}
