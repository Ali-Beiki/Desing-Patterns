<?php 
    interface Product{
        public function get_name():string;
        public function get_price():int;
        public function get_description():string;
    }