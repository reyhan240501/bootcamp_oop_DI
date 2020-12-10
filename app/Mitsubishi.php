<?php

namespace App;
use App\Premium;

/**
 * Mitsubishi
 */

class Mitsubishi
{
    /**
     * Mitsubishi fuel
     * 
     * @var string.int
     */
    
    private $fuel;

    /**
     * Take a Premium class
     * 
     * @param
     * @return
     */

    public function __construct()
    {
        $this->fuel=new Premium();
    }

    /**
     * Get method of Premium class
     * 
     * @return string.int
     */

    public function fillup()
    {
        $string="this Mitsubishi is filled up with {$this->fuel->getSolar()} and you have to pay Rp {$this->fuel->getPrice()}";

        echo $string;
    }
}