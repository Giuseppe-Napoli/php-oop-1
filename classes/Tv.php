<?php

    class Tv{
        public $title;
        public $genre;
        public $_season;


        public function __construct($_title,$_genre,$_season){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->seasons = $_season;
        }


    }

