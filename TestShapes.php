<?php
declare(strict_types=1);

require_once "Shape.php";

# Question 1
$figure1 = new Shape(6);
var_dump($figure1);
# - vertices -> int -> 6
# Le mode d'accès de l'attribut vertices est protected.
# public    : Accessible à tout le monde
# private   : Accessible uniquement à l'intérieur de la classe
# protected : Accessible uniquement aux classes filles
