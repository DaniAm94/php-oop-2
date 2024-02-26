<?php

class Product{
    private $id;
    public $label;
    public $img;
    public $type;
    public $category;
    public $price;

   public  function __construct(string $label, string $img, string $type, Category $category, float $price= 0.0){

    $this->setId();
    $this->label = $label;
    $this->img = $img;
    $this->type = $type;
    $this->category = $category;
    $this->price = $price . '€';
    }

    public function getId(){
        return $this->id;
    }

    private function setId(){
       $this->id= substr(uniqid(), -4);
    }
}