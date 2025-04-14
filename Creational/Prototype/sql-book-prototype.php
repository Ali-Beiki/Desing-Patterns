<?php
    require_once __DIR__.DIRECTORY_SEPARATOR."book-prototype.php";
    class Sql extends BookPrototype{
        public function __construct(){
            $this->topic = 'SQL';
        }

        public function __clone(){
            echo " does copy Sql Book <br>";
        }
    }
