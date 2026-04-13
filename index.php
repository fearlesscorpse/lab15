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
    class Rectangle extends Figure implements iFigure {
    }
    class Triangle extends Figure implements iFigure {
    }
    class Square extends Figure implements iFigure {
    }
    //Задание 4
    interface iFigure {
        public function getArea();    
    }
?>
