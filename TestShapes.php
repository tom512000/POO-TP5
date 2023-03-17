<?php
declare(strict_types=1);

require_once "Shape.php";
require_once "Rectangle.php";
require_once "Square.php";

# Question 1
$figure1 = new Shape(6);
var_dump($figure1);
# - vertices -> int -> 6
# Le mode d'accès de l'attribut vertices est protected.
# public    : Accessible à tout le monde
# private   : Accessible uniquement à l'intérieur de la classe
# protected : Accessible uniquement aux classes filles

# Question 2
# La syntaxe permettant d’obtenir le lien d’héritage entre les classes
# Shape et Rectangle est "class Rectangle extends Shape".

# Question 3
$rectangle1 = new Rectangle(25, 63.5);
echo "\n";
$rectangle1->print();
# Caractéristiques de l'instance $rectangle1 :
# - vertices -> int   -> 4
# - edge1    -> float -> 25.0
# - edge2    -> float -> 63.5
# L'instance $rectangle1 a un nouvel attribut.
# L'instance de la classe Rectangle hérite bien de l'attribut
# vertices de sa classe mère Shape.
# L'instruction "parent::__construct(4)" permet d'instancier un nouvel
# objet avec le constructeur de la classe mère.
# Si l'instruction n’est pas présente dans le constructeur, il n'y aurais
# pas d'héritage d'attribut(s) entre la classe mère et la classe fille.
# Non, aucun.

# Question 4
# L'instruction "parent::print()" permet d'utiliser la méthode print()
# de la classe mère pour afficher son attribut vertices.
# Si l'instruction n’est pas présente dans la méthode, la méthode
# print() de la classe Rectangle n'afficherais pas l'attribut hérité.
# Non, aucun.
# L’instruction "parent::print()" peut être remplacée par "Shape::print()".
# Utilser les 2 instructions en revient au même.

# Question 5
$carre1 = new Square(14);
echo "\n";
$carre1->print();
# Caractéristiques de l'instance $rectangle1 :
# - vertices -> int   -> 4
# - edge1    -> float -> 14.0
# - edge2    -> float -> 14.0
# L'instance $carre1 a 3 nouveaux attributs.
# L’instance $carre1 hérite de l'attribut vertices de la classe Shape.
# L’instance $carre1 hérite des attributs edge1 et edge2
# de la classe Rectangle, l'instance est donc un rectangle.
# L'instruction "parent::__construct($a1,$a1)" permet d'instancier un
# nouvel objet avec le constructeur de la classe mère en utilisant la
# l'arrête pour la longueur et la largeur du carré.
# Non, car la classe Square hérite de la classe Rectangle et que
# Rectangle hérite de la classe Shape et que la classe Rectangle
# utilise le constructeur de  la classe Shape.

# Question 6
# echo "\n";
# $carre1->print();
# Cela est impossible car la classe Square n'hérite pas des attributs
# de la classe Rectangle car ils sont en privé.
