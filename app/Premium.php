<?php

namespace App;

/**
 * description fuel and the price
 */

 class Premium
 {
    /**
     * Prices for fuel
     * 
     * @var int
     */

     private $price;

    /**
     * Fuel
     * 
     * @var string
     */

     private $premium;
     private $solar;

    /**
     * Set the fuel and the price
     * 
     * @param
     * @return 
     */

     public function __construct()
     {
         $this->price=10000;
         $this->premium='premium';
         $this->solar='solar';
     }

     /**
      * Get the price of the fuel
      *
      * @return int
      */
    
     public function getPrice()
     {
         return $this->price;
     }

    /**
     * Get the fuel
     * 
     * @return string
     */

     public function getPremium()
     {
         return $this->premium;
     }

     public function getSolar()
     {
         return $this->solar;
     }
 }
