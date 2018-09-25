<?php

namespace app\models;

class Objects {
    protected $cost;

    public function setCost($cost){
            $this->cost = $cost;
            return $this;
    }

    public function getCost(){
        return $this->cost;
    }
}

class Card {
    public $items = [];

    public function addItem(Objects $item){
        $this->items[] = $item;
        return $this;
    }

    public function total(){

        $total = array_sum(array_map(function($item){
              return $item->getCost();  
        },$this->items));
        return $total;    
    } 


}