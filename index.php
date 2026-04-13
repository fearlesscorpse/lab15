<?php
    //Задание 1
    abstract class Figure {
        protected $square;
        protected $color;
        protected $numberOfSides;

        public function __construct($color = 'Белый') {
            $this->color=$color;
        }

        //Задание 2
        abstract public function infoAbout();
    }
    //Задание 3
    class Rectangle extends Figure implements iFigure {
        //Задание 5
        private $a;
        private $b;
        //Задание 8, 9
        public function __construct ($a, $b, $color='Черный') {
            parent::__construct($color);
            $this->a=$a;   
            $this->b=$b;    
            $this->numberOfSides=4;
        }
    }
    class Triangle extends Figure implements iFigure {
        //Задание 7
        private $a;
        private $b;
        private $c;
        //Задание 8, 9
        public function __construct ($a, $b, $c, $color='Красный') {
            parent::__construct($color);
            $this->a=$a;   
            $this->b=$b; 
            $this->c=$c;   
            $this->numberOfSides=3;
        }
    }
    class Square extends Figure implements iFigure {
        //Задание 6
        private $a;
        //Задание 8, 9
        public function __construct ($a, $color='Синий') {
            parent::__construct($color);
            $this->a=$a;    
            $this->numberOfSides=4;
        }
    }
    //Задание 4
    interface iFigure {
        public function getArea();    
    }
?>
