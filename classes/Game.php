<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";




class Game extends Product{
    protected $genre;
    protected $materials = [] ;


    function __construct($_name, $_price, Category $_category, $_materials)
    {
        parent::__construct($_name, $_price, $_category);
        $this->setMaterials($_materials);
        
        
    }

    


    /**
     * Get the value of materials
     */ 
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set the value of materials
     *
     * @return  self
     */ 
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }
}



?>