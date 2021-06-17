<?php

    class Tv{
        public $title;
        public $genre;
        public $_season;
        public $start;
        public $end;


        
        public function __construct($_title,$_genre){
            $this->title = $_title;
            $this->genre = $_genre;
        }

        public function getDate(){
            return "Serie iniziata nel " .$this->start ." e terminata nel " .$this->end;
        }

    }

