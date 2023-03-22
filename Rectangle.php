<?php 

require_once "Shape.php";

class Rectangle extends Shape {

    private float $edge1 ;
    private float $edge2 ;

    /**
     * Constructeur de la classe Rectangle. Ce constructeur permet
     * d’affecter deux longueurs d'arête à un rectangle.
     *
     * @param float $a1 (optional) Longueur de la première arête
     * @param float $a2 (optional) Longueur de la deuxième arête
     */
    public function __construct(float $a1, float $a2)
    {
        parent::__construct(4);
        $this->edge1=$a1;
        $this->edge2=$a2;
        echo "Rectangle ( $a1 , $a2 )\n";
    }

    /**
     * Affichage des attributs edge1 et edge2 du rectangle.
     */
    public function print() : void
    {
        parent::print();
        echo "Arete1 : {$this->edge1}\n";
        echo "Arete2 : {$this->edge2}\n";
    }
}
