<?php

namespace App;
use App\Premium;

/**
 * Honda
 */

class Honda
{
    /**
     * Honda fuel
     * 
     * @var string.int
     */

    private $fuel;

    /**
     * Take a premium class
     * 
     * @param
     * @return
     */

    public function __construct()
    {
        $this->fuel=new Premium();
    }

    /**
     * Get method of premium class
     * 
     * @return string.int
     */

    public function fillup()
    {
        $string="this Honda is filled up with {$this->fuel->getPremium()} and you have to pay Rp {$this->fuel->getPrice()}";

        echo $string;
    }
}