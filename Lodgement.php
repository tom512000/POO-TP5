<?php
declare(strict_types=1);

class Lodgement
{
    private float $surface;
    private string $type;
    private float $meterPrice;

    /**
     * Constructeur de la classe Lodgement. Ce constructeur permet d’affecter
     * une surface, un type et un prix au mètre à un lodgement.
     *
     * @param float $surface (optional) Surface du lodgement
     * @param string $type (optional) Type du lodgement
     * @param float $meterPrice (optional) Prix au mètre carré du lodgement
     */
    public function __construct (float $surface, string $type, float $meterPrice)
    {
        $this->surface = $surface;
        $this->type = $type;
        $this->meterPrice = $meterPrice;
    }

    /**
     * Accesseur à l'instance meterPrice de Lodgement. Retourne la valeur de l'instance meterPrice
     * sous forme de nombre réel.
     *
     * @return float Instance meterPrice de Lodgement
     */
    public function getMeterPrice() : float
    {
        return $this->meterPrice;
    }

    /**
     * Modificateur à l'instance meterPrice de Lodgement. Permet d’affecter une nouvelle
     * valeur à l'instance meterPrice de Lodgement.
     *
     * @param float $meterPrice Instance meterPrice de Lodgement
     */
    public function setMeterPrice(float $meterPrice) : void
    {
        $this->meterPrice = $meterPrice;
    }

    /**
     * Affichage des attributs de lodgement. Retourne une chaîne de caractères composée
     * d'une surface, d'un type et d'un prix au mètre carré du lodgement.
     *
     * @return string Attributs du lodgement
     */
    public function __toString() : string
    {
        $res = "Surface : $this->surface\n";
        $res .= "Type : $this->type\n";
        $res .= "Prix du m² : $this->meterPrice";
        return $res;
    }

    /**
     * Méthode permettant de calculer le prix total d'un lodgement en
     * multipliant la surface en mètre carré et le prix au mètre carré.
     */
    public function getPrice() : float
    {
        return $this->surface*$this->meterPrice;
    }
}