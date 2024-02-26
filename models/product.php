<?php

class Product{
    public $label;
    public $img;
    public $type;
    public $category;

   public  function __construct(string $label, string $img, string $type, Category $category){

    $this->label = $label;
    $this->img = $img;
    $this->type = $type;
    $this->category = $category;
    }
}