<?php

class Shape 
{
    protected int $vertices;

    /**
     * Constructeur de la classe Shape. Ce constructeur permet d’affecter
     * un nombre de sommets à une forme.
     *
     * @param int $sommets (optional) Nombre de sommets de la forme
     */
    public function __construct(int $sommets)
    {
        $this->vertices = $sommets ;
        echo "Shape ( $sommets ) \n";
    }

    /**
     * Affichage de l'attribut vertices de la forme.
     */
    public function print() : void
    {
        echo "Sommets : $this->vertices\n";
    }

}

