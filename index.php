<?php
    //Задание 1
    abstract class Figure {
        protected $square;
        protected $color;
        protected $numberOfSides;

        //Задание 2
        abstract public function infoAbout();
    }
    //Задание 3
    class Rectangle extends Figure {
    }
    class Triangle extends Figure {
    }
    class Square extends Figure {
    }
?>
