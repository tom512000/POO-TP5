<?php
declare(strict_types=1);
require_once "Lodgement.php";

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
