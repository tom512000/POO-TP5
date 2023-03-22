<?php
declare(strict_types=1);

class Apartment extends Lodgement
{
    private int $floor;
    private bool $lift;

    /**
     * Constructeur de la classe Apartment. Ce constructeur permet d’affecter
     * une surface, un type, un prix au mètre, un étage et la présence d'un ascenseur à un appartement.
     *
     * @param float $surface (optional) Surface du lodgement
     * @param string $type (optional) Type du lodgement
     * @param float $meterPrice (optional) Prix au mètre carré du lodgement
     * @param int $floor (optional) Etage auquel se trouve l’appartement
     * @param bool $lift (optional) Présence d'un ascenseur
     */
    public function __construct(float $surface, string $type, float $meterPrice, int $floor, bool $lift)
    {
        parent::__construct($surface, $type, $meterPrice);
        $this->floor = $floor;
        $this->lift = $lift;
    }
    
    /**
     * Affichage des attributs de Apartment. Retourne une chaîne de caractères composée
     * d'une surface, un type, un prix au mètre, un étage et la présence d'un
     * ascenseur.
     *
     * @return string Attributs de l'appartement
     */
    public function __toString() : string
    {
        $res = parent::__toString()."\n";
        $res .= "Etage : $this->floor\n";
        if ($this->lift){
            $res .= "Ascenseur : oui";
        } else {
            $res .= "Ascenseur : non";
        }
        return $res;
    }

    /**
     * Méthode permettant de calculer le prix total d'un lodgement en
     * multipliant la surface en mètre carré et le prix au mètre carré
     * en fonction de l'étage.
     */
    public function getPrice() : float
    {
        $res = parent::getPrice();
        if ($this->floor == 0) {
            $res *= 0.85;
        } elseif ($this->floor >= 2 && $this->floor <= 4) {
            $multiplier = 1;
            if (!$this->lift) {
                $i = 2;
                while ($i <= $this->floor && $i <= 4) {
                    $multiplier *= 1.05;
                    $i += 1;
                }
            } else {
                $i = 2;
                while ($i <= $this->floor && $i <= 4) {
                    $multiplier *= 0.95;
                    $i += 1;
                }
            }
            $res *= $multiplier;
        }
        return $res;
    }
}