<?php
declare(strict_types=1);
require_once "Lodgement.php";
require_once "Apartment.php";
require_once "House.php";

# Question 2
$logement1 = new Lodgement(46.7, "T2", 6805.);

# Question 3
echo $logement1->getMeterPrice()."\n";
$logement1->setMeterPrice(5800.);
echo $logement1->getMeterPrice()."\n";

# Question 4
echo "$logement1\n";

# Question 5
# Non, car les attributs de Lodgement sont considérés comme simple
# et donc n'ont pas besoin d'être clonés.
$logement2 = clone $logement1;
echo "$logement2\n";

# Question 6
echo $logement1->getPrice()."\n";

# Question 9
$appart = new Apartment(82.5, 'F4', 9805, 5, true);

# Question 10
echo $appart."\n";

# Question 11
# Oui, car ici on utilise les attributs d'une classe mère. Les attributs
# utilisés doivent être clonés afin de pas avoir de problème.

# Question 12
echo $appart->getPrice()."\n";

# Question 14
$maison = new House(200.5, 'F5', 10000, 100);
echo $maison."\n";

# Question 15
echo $maison->getPrice()."\n";
