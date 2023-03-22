<?php

class House extends Lodgement
{
    private float $gardenArea;

    /**
     * Constructeur de la classe Apartment. Ce constructeur permet d’affecter
     * une surface, un type, un prix au mètre et une surface de jardin à une maison.
     *
     * @param float $surface (optional) Surface du lodgement
     * @param string $type (optional) Type du lodgement
     * @param float $meterPrice (optional) Prix au mètre carré du lodgement
     * @param float $gardenArea (optional) Surface de jardin de la maison
     */
    public function __construct(float $surface, string $type, float $meterPrice, float $gardenArea)
    {
        parent::__construct($surface, $type, $meterPrice);
        $this->gardenArea = $gardenArea;
    }

    /**
     * Affichage des attributs de la maison. Retourne une chaîne de caractères composée
     * d'une surface, d'un type, d'un prix au mètre carré et d'une surface de jardin.
     *
     * @return string Attributs de la maison
     */
    public function __toString() : string
    {
        $res = parent::__ToString()."\n";
        $res .= "Jardin : $this->gardenArea";
        return $res;
    }

    /**
     * Méthode permettant de calculer le prix total d'une maison en
     * multipliant la surface en mètre carré et le prix au mètre carré
     * en fonction de la surface de jardin.
     */
    public function getPrice() : float
    {
        $res = parent::getPrice();
        $gardenPrice = $this->gardenArea * $res * 0.1;
        $res += $gardenPrice;
        return $res;
    }
}