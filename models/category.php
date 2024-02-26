<?php

class Category{
    public $label;
    private $icon;


    function __construct(string $label){
        $this->label= $label;
       $this->setIcon();
    }

    private function setIcon(){
        if(in_array(ucfirst($this->label), ['Cane', 'Gatto', 'Uccelli', 'Pesci'])){
            $this->icon = 'icona-'.lcfirst($this->label).'.png';
        }else {
            $this->icon = null;
        }
        
    }

    public function getIcon(){
        return $this->icon;
    }
}