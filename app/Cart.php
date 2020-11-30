<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

public $items = []; //this to save the elemant of product
    public $totalQty ;
    public $totalPrice;

    public function __Construct($cart = null) {//this variable will be sav in session
        if($cart) {
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        } else {
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    public function add($product) {
        
        $item = [
        	'id' =>  $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'qty' => 0,
            'mainImage' => $product->mainImage,
        ];

        if( !array_key_exists($product->id, $this->items)) {
            $this->items[$product->id] = $item ;
            $this->totalQty +=1;
            $this->totalPrice += $product->price; 
        } else {
            $this->totalQty +=1 ;
            $this->totalPrice += $product->price; 
        }

        $this->items[$product->id]['qty']  += 1 ;
    }

    public function updateQty($id, $qty) {
        
        //reset qty and price in the cart ,
        $this->totalQty -= $this->items[$id]['qty'] ;
        $this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['qty']   ;
        // add the item with new qty
        $this->items[$id]['qty'] = $qty;

        // total price and total qty in cart
        $this->totalQty += $qty ;
        $this->totalPrice += $this->items[$id]['price'] * $qty   ;

    }
    public function remove($id) {

        if( array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['qty'] * $this->items[$id]['price'];
            unset($this->items[$id]);

        }

    }
}