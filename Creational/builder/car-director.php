<?php
require_once __DIR__.DIRECTORY_SEPARATOR.'car.php';
class CarDirector {
    private CarBuilder $builder;

    public function setBuilder(CarBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildCar(): Car {
        $this->builder->set_color();
        $this->builder->set_engine_size();
        $this->builder->set_valve();
        $this->builder->add_option();

        return $this->builder->get_car();
    }
}