<?php

require_once "Rectangle.php";


class Square extends Rectangle 
{
    /**
     * Constructeur de la classe Square. Ce constructeur permet
     * d’affecter une longueur d'arête à un carré.
     *
     * @param float $a1 (optional) Longueur de la première arête
     */
    public function __construct ( float $a1)
    {
        parent::__construct ($a1,$a1);
        echo "Square ( $a1 )\n";
    }

#    public function print () : void
#    {
#        Shape::print();
#        echo "Arête : {$this->edge1}";
#    }
}

