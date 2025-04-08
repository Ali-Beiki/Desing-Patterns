<?php
    require_once __DIR__.DIRECTORY_SEPARATOR.'car-builder.php';

    class BasicCarBuilder implements CarBuilder{
        private Car $car;

        public function __construct(){
            $this->car = new Car();
        }
        
        public function set_color(): void{
            $this->car->set_color_car("Red");
        }

        public function set_engine_size(){
            $this->car->set_engine_size_car(1800);
        }

        public function set_valve(){
            $this->car->set_valve_car(8);
        }
        public function add_option(){
            
        }
        public function get_car() :Car{
            return $this->car;
        }   
    }