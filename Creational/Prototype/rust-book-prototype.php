<?php
    require_once __DIR__.DIRECTORY_SEPARATOR."book-prototype.php";
    class Rust extends BookPrototype{
        public function __construct(){
            $this->topic = 'Rust';
        }

        public function __clone(){
            echo " does copy Rust Book <br>";
        }
    }
