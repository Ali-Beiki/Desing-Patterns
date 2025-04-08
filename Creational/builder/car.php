<?php
    class Car{
        private string $color;
        private string $engine_size;
        private string $valve;
        private array $options=[];
    

        public function set_color_car(string $color){
            $this->color =$color;
        }

        public function set_engine_size_car(int $engine_size){
            $this->engine_size =$engine_size;
        }

        public function set_valve_car(int $valve){
            $this->valve =$valve;
        }

        public function add_option_car(string $option): static{
            $this->options[] =$option;
            return $this;
        }

        public function get_car_information():string{
            $toppingsStr = implode(',',$this->options);
            return "Car Info :Color :{$this->color} ,Engine Size : {$this->engine_size} , Count Valve : {$this->valve} ,Other Option : $toppingsStr";
        }
    }