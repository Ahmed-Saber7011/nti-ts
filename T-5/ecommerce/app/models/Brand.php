<?php

namespace app\models;

use app\database\connection;
use app\database\contracts\crud;

class Brand extends connection implements crud
{
    private $id, $name_en, $name_ar, $status, $image, $created_at, $updated_at;
    
    
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
    public static function find(int $id)
    {
        $query = "SELECT * FROM `brands` WHERE `id` = {$id}";
        return (New connection)->runDQL($query)->num_rows >= 1 ? true : false;
    }

    public function getBrands()
    {
        $query = "SELECT `id`,`name_en`,`image` FROM `brands` WHERE `status` = {$this->status}";
        return $this->runDQL($query);
    }
}
