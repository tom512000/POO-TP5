<?php

require_once "Rectangle.php";


class Square extends Rectangle 
{

    public function __construct ( float $a1)
    {
        parent::__construct ($a1,$a1);
        echo "Square ( $a1 )\n";
    }

#    public function print () : void
#    {
#        Shape::print();
#        echo "Arête : {$this->edge1}";
#    }
}

