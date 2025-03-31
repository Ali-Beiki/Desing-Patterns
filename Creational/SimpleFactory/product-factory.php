<?php

require_once __DIR__.DIRECTORY_SEPARATOR.'autoloader.php';


    class ProductFactory{
        public function create_product(string $type,string $name,int $price,string $description) :Product{
            return match ($type) {
                'book'=> new Book($name,$price,$description),
                'car'=>new Car($name,$price,$description) ,
                'phone'=> new Phone($name,$price,$description),
            };
        }
    }