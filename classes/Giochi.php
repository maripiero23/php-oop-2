<?php
require_once __DIR__ . "/Prodotto.php";



class Giochi extends Prodotti{
    protected $category;

    function __construct($_description, $_brand, $_price, $_category)
    {
        $this->setCategory($_category)
        
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}



?>