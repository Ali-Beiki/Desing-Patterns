<?php
    require_once __DIR__.DIRECTORY_SEPARATOR.'car-builder.php';

    class VIPCarBuilder implements CarBuilder{
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
            $this->car
                    ->add_option_car("LED Lamp")
                    ->add_option_car("Auto Gearbox")
                    ->add_option_car("Dark Glass");
        }
        public function get_car() :Car{
            return $this->car;
        }   
    }