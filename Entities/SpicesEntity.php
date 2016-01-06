<?php

class SpicesEntity 
{
    public $id;
    public $name;
    public $type;
    public $price;
    public $country;
    public $image;
    public $review;
    
    function __construct($id, $name, $type, $price, $country, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->country = $country;
        $this->image = $image;
        $this->review = $review;
    }

}

?>