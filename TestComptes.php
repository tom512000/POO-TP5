<?php
declare(strict_types=1);
require_once "Compte.php";
require_once "Courant.php";
require_once "Livret.php";

# Question 2
$compte1 = new Compte("Lagaffe", 50408);
$compte2 = new Compte("Dupont", 50409, 3000.);

# Question 3
echo $compte1->getSolde()."\n";
echo $compte2->getSolde()."\n";

# Question 4
echo $compte1."\n";
echo $compte2."\n";

# Question 5
echo $compte1->effectuerDepot(1500)."\n";
echo $compte2->effectuerRetrait(1000)."\n";

# Question 7
$courant1 = new Courant("Madjoub", 50410, 1600, 1500);
$courant2 = new Courant("Lefevre", 50411, 3000.);

# Question 8
echo $courant1->getDecouvert()."\n";
$courant1->setDecouvert(1700);
echo $courant1->getDecouvert()."\n";

# Question 9
$courant1->effectuerRetrait(1550);
# La méthode effectuerDepot n'est pas à redéfinir car il n'y a
# pas de différence entre Compte et Courant sur ce point la.

# Question 10
echo $courant1."\n";
echo $courant2."\n";

# Question 12
$livret1 = new Livret("Madjoub", 50412, 1600, 100, 850);
$livret2 = new Livret("Lefevre", 50413, 1600, 500);

# Question 13
$livret1->effectuerRetrait(500);
# A l'inverse de la méthode effectuerRetrait, la classe Livret a comme attribut
# plafond, ce qui limite le montant du solde du Livret et a fonc besoin de la
# méthode effectuerDepot.
$livret1->effectuerDepot(450);

# Question 14
$livret1->priseInterets();

# Question 15
echo $livret1."\n";

# Question 17
$compte1->effectuerVirement($livret2, 500);
$courant1->effectuerVirement($compte2, 500);
$livret1->effectuerVirement($courant2, 500);
# Livret et Courant étant classe fille de Compte et ayant l'attribut solde à leur
# construction, la méthode n'a pas besoin d'être redéfini dans les classes filles.

# Question 18
# Le polymorphisme décrit un modèle dans la programmation orientée objet dans
# lequel les classes ont des fonctionnalités différentes, tout en partageant
# une interface commune.

# Question 19
# Oui, car la méthode abstraite pourra être utilisée dans les sous-classes
# de la classe Compte (Courant et Livret) mais on ne pourra plus directement
# créer des instances de la classe Compte.
# La méthode effectuerVirementBis devra être recréée pour chaque classe
# dérivée de Compte sans le mot-clé abstract.
