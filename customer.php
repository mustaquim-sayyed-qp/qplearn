<?php

class Customer {
    public $name;
    private $type; // "Regular", "Premium", "VIP"
    public $discount;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
        $this->setDiscount();
    }

    public function setDiscount() {
        switch($this->type){
            case 'Regular': 
                $this->discount = 0.05;
            case 'Premium' :
                $this->discount = 0.1;
            case 'VIP' :
                $this->discount = 0.2;
            default :
                $this->discount = 0;
        }
    }
}

?>