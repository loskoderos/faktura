<?php

namespace Faktura\Entity;

use Generic\Object\ToArrayInterface;

interface AddressInterface extends ToArrayInterface
{
    /**
     * Street line.
     * @return string
     */
    public function getStreet();
    
    /**
     * Second street line, in some countries street is broken to two lines.
     * @return string
     */
    public function getStreetExt();
    
    /**
     * City.
     * @return string
     */
    public function getCity();
    
    /**
     * Country.
     * @return string
     */
    public function getCountry();
    
    /**
     * Post code.
     * @return string.
     */
    public function getPostCode();
}
