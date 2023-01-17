<?php 

require_once __DIR__ ."/Category";
class Product{
    protected $name;
    protected $price;
    protected $image;
    protected $isAvailable = true;
    protected $quantity = 0;
    protected $category;





    function __construct($_name, $_price, $_category, $_isAvailable = null, $_quantity = null, $_image = null){

        $this->setName($_name);
        $this->setPrice($_price);
        $this->setImage($_image);
        $this->setIsAvailable($_isAvailable);
        $this->setQuantity($_quantity);
        $this->setCategory($_category);

    }

    


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

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

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        if(empty($image)){
            return;
        }

        $this->image = $image;
        return $this;
    }

    /**
     * Get the value of isAvailable
     */ 
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set the value of isAvailable
     *
     * @return  self
     */ 
    public function setIsAvailable($isAvailable)
    {
        if(is_null($isAvailable)){
            return;
        }
         $this->isAvailable = $isAvailable;
        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        if(is_null($quantity)){
            return;
        }

        $this->quantity = $quantity;
        return $this;
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
   