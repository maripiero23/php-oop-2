<?php 

class Prodotti{
    protected $description;
    protected $brand;
    protected $price;

    function __construct($_description, $_brand, $_price){

        $this->setDescription($_description);
        $this->setBrand($_brand);
        $this->setPrice($_price);

    }


    


    /**
     * Get the value of category
     */ 
    public function setDescription()
    {
        return $this->description;

    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function getDescription($description)
    {
        $this->category = $description;

        return $this;
    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}


?>