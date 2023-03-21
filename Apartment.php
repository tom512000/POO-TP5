<?php
declare(strict_types=1);

class Apartment extends Lodgement
{
    private int $floor;
    private bool $lift;

    /**
     * Constructeur de la classe Lodgement. Ce constructeur permet d’affecter
     * une surface, un type et un prix au mètre à un lodgement.
     *
     * @param float $surface (optional) Surface du lodgement
     * @param string $type (optional) Type du lodgement
     * @param float $meterPrice (optional) Prix au mètre carré du lodgement
     */
    public function __construct (float $surface, string $type, float $meterPrice, int $floor, bool $lift)
    {
        parent::__construct();
        $this->surface = $surface;
        $this->type = $type;
        $this->meterPrice = $meterPrice;
    }
}