<?php

/*abstract*/ class Compte
{
    private int $numero;
    private string $titulaire;
    private float $solde;

    /**
     * Constructeur de la classe Compte. Ce constructeur permet d’affecter
     * un numéro, un nom du titulaire et un solde à un compte.
     *
     * @param string $titulaire (optional) Nom du titulaire du compte
     * @param int $numero (optional) Numéro de compte
     * @param float $solde (optional) Solde du compte
     */
    public function __construct(string $titulaire, int $numero, float $solde = 0.0)
    {
        $this->numero = $numero;
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }

    /**
     * Accesseur à l'instance solde de Compte. Retourne la valeur de l'instance solde
     * sous forme de nombre réel.
     *
     * @return float Instance solde de Compte
     */
    public function getSolde() : float
    {
        return $this->solde;
    }

    /**
     * Affichage des attributs de Compte. Retourne une chaîne de caractères composée
     * d'un nom du titulaire, d'un numéro et d'un solde de Compte.
     *
     * @return string Attributs de Compte
     */
    public function __toString() : string
    {
        $res = "Nom : $this->titulaire\n";
        $res .= "Numéro : $this->numero\n";
        $res .= "Solde : $this->solde";
        return $res;
    }

    /**
     * Méthode permettant de calculer le nouveau solde d'un compte après un retrait
     *
     * @param float $retrait (optional) Montant du retrait
     *
     * @return bool true
     */
    public function effectuerRetrait(float $retrait) : bool
    {
        $this->solde -= $retrait;
        echo "Numéro : $this->numero\n";
        echo "Type d'opération : Retrait\n";
        echo "Montant de l'opération : $retrait\n";
        echo "Nouveau solde : $this->solde\n";
        return true;
    }

    /**
     * Méthode permettant de calculer le nouveau solde d'un compte après un dépôt
     *
     * @param float $depot (optional) Montant du dépôt
     *
     * @return bool true
     */
    public function effectuerDepot(float $depot) : bool
    {
        $this->solde += $depot;
        echo "Numéro : $this->numero\n";
        echo "Type d'opération : Dépôt\n";
        echo "Montant de l'opération : $depot\n";
        echo "Nouveau solde : $this->solde\n";
        return true;
    }

    /**
     * Méthode permettant de transférer un montant d'un Compte à un autre.
     *
     * @param Compte $destinataire (optional) Compte destinataire
     * @param float $montant (optional) Montant à transferer
     *
     * @return bool true si le virement est possible, false sinon
     */
    public function effectuerVirement(Compte $destinataire, float $montant) : bool
    {
        if ($montant > $this->solde) {
            $res = false;
        } else {
            $this->solde -= $montant;
            $destinataire->solde += $montant;
            $res = true;
        }
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
    #abstract public function effectuerVirementBis(Compte $destinataire, float $montant) : bool;
}