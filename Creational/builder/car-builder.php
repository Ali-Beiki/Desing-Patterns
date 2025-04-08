<?php
    
    interface CarBuilder{
        public function set_color();

        public function set_engine_size();
        public function set_valve();
        public function add_option();
        public function get_car() :Car;
        
    }