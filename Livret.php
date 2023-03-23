<?php

class Livret extends Compte
{
    private float $plafond;
    private float $soldeMin;

    /**
     * Constructeur de la classe Livret. Ce constructeur permet d’affecter
     * un numéro, un nom du titulaire, un solde, un montant maximal de
     * découvert, un plafond et un solde minimum à un Livret.
     *
     * @param string $titulaire (optional) Nom du titulaire du Livret
     * @param int $numero (optional) Numéro de Livret
     * @param float $plafond (optional) Plafond du Livret
     * @param float $soldeMin (optional) Solde minimum du Livret
     * @param float $solde (optional) Solde du Livret
     */
    public function __construct(string $titulaire, int $numero, float $plafond, float $soldeMin, float $solde = 0.0)
    {
        parent::__construct($titulaire, $numero, $solde);
        $this->plafond = $plafond;
        $this->soldeMin = $soldeMin;
    }

    /**
     * Méthode permettant de calculer le nouveau solde d'un Livret après un retrait
     *
     * @param float $retrait (optional) Montant du retrait
     *
     * @return bool true si le retrait est possible, false sinon
     */
    public function effectuerRetrait(float $retrait) : bool
    {
        if (parent::getSolde()-$retrait < $this->soldeMin){
            $res = !parent::effectuerRetrait($retrait);
        } else {
            $res = parent::effectuerRetrait($retrait);
        }
        return $res;
    }

    /**
     * Méthode permettant de calculer le nouveau solde d'un Livret après un dépôt
     *
     * @param float $depot (optional) Montant du dépôt
     *
     * @return bool true si le dépôt est possible, false sinon
     */
    public function effectuerDepot(float $depot) : bool
    {
        if (parent::getSolde()+$depot > $this->soldeMin){
            $res = !parent::effectuerDepot($depot);
        } else {
            $res = parent::effectuerDepot($depot);
        }
        return $res;
    }

    /**
     * Méthode permettant de calculer les intêrets et de les ajouter au solde.
     */
    public function priseInterets() : void
    {
        $solde = parent::getSolde();
        if ($solde < 1600){
            $depot = $solde * 1.0225;
        } else {
            $depot = 1600 * 1.0225;
        }
        parent::effectuerDepot($depot);
    }

    /**
     * Affichage des attributs de Livret. Retourne une chaîne de caractères composée
     * d'un nom du titulaire, d'un numéro, d'un solde, d'un solde minimum et d'un
     * plafond de Livret.
     *
     * @return string Attributs de Livret
     */
    public function __toString() : string
    {
        $res = parent::__toString()."\n";
        $res .= "Solde minimum : $this->soldeMin\n";
        $res .= "Plafond : $this->plafond";
        return $res;
    }

    /**
     * Méthode abstraite permettant de transférer un montant d'un Compte à un autre.
     *
     * @param Compte $destinataire (optional) Compte destinataire
     * @param float $montant (optional) Montant à transferer
     *
     * @return bool true si le virement est possible, false sinon
     */
    /*public function effectuerVirementBis(Compte $destinataire, float $montant): bool
    {
        if ($montant > $this->getSolde()) {
            $res = false;
        } else {
            $this->effectuerRetrait($montant);
            $this->effectuerDepot($montant);
            $res = true;
        }
        return $res;
    }*/
}