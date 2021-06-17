<?php

    class Movie{

        public $title;
        public $genre;
        public $year;
        public $protagonist;
        public $duration;
        private $price;
        static $counter;
        
        public function __construct($_title,$_duration,$_genre){
            $this->title = $_title;
            $this->duration = $_duration;
            $this->genre = $_genre;
            self::$counter++;
        }

        public function getInfo(){
            return "Anno di uscita: ".$this->year . ", Protagonista: ".$this->protagonist;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }

        public function getPrice(){
            return $this->price;
        }

        static function getCounter(){
            return self::$counter;
        }
    }