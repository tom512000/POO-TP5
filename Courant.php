<?php

class Courant extends Compte
{
    private float $decouvert;

    /**
     * Constructeur de la classe Courant. Ce constructeur permet d’affecter
     * un numéro, un nom du titulaire, un solde et un montant maximal de
     * découvert à un compte Courant.
     *
     * @param string $titulaire (optional) Nom du titulaire du compte Courant
     * @param int $numero (optional) Numéro de compte Courant
     * @param float $decouvert (optional) Montant maximal de découvert
     * @param float $solde (optional) Solde du compte Courant
     */
    public function __construct(string $titulaire, int $numero, float $decouvert, float $solde = 0.0)
    {
        parent::__construct($titulaire, $numero, $solde);
        $this->decouvert = $decouvert;
    }

    /**
     * Accesseur à l'instance decouvert de Courant. Retourne la valeur de l'instance decouvert
     * sous forme de nombre réel.
     *
     * @return float Instance decouvert de Courant
     */
    public function getDecouvert() : float
    {
        return $this->decouvert;
    }

    /**
     * Modificateur à l'instance decouvert de Courant. Permet d’affecter une nouvelle
     * valeur à l'instance decouvert de Courant.
     *
     * @param float $decouvert Instance decouvert de Courant
     */
    public function setDecouvert(float $decouvert) : void
    {
        $this->decouvert = $decouvert;
    }

    /**
     * Méthode permettant de calculer le nouveau solde d'un compte Courant après un retrait
     *
     * @param float $retrait (optional) Montant du retrait
     *
     * @return bool true si le retrait est possible, false sinon
     */
    public function effectuerRetrait(float $retrait) : bool
    {
        if (parent::getSolde()-$retrait < $this->decouvert){
            $res = !parent::effectuerRetrait($retrait);
        } else {
            $res = parent::effectuerRetrait($retrait);
        }
        return $res;
    }

    /**
     * Affichage des attributs de Courant. Retourne une chaîne de caractères composée
     * d'un nom du titulaire, d'un numéro, d'un solde et d'un découvert de Courant.
     *
     * @return string Attributs de Courant
     */
    public function __toString() : string
    {
        $res = parent::__toString()."\n";
        $res .= "Decouvert : $this->decouvert";
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