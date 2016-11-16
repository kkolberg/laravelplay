<?php

namespace App\Model;


class Order
{
    private $cars = Array();
    private $items = Array();
    
    public function get_Cars(){
        if($this->cars==null){
            $this->cars=Array();
        }
        
        return $this->cars;
    }
    
    public function set_Cars($val){
        $this->cars=$val;
    }
    
    public function get_Items(){
        if($this->items==null){
            $this->items=Array();
        }
        
        return $this->items;
    }
    
    public function set_Items($val){
        $this->items=$val;
    }
}