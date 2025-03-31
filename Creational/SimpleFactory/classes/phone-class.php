<?php 
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'product.php';
    
    class Phone implements Product{
        public function __construct(
            private readonly string $name,
            private readonly int $price,
            private readonly string $description,
        ){}
        public function get_name(): string{
            return $this->name;
        }

        public function get_price(): int{
            return $this->price;
        }

        public function get_description(): string{
            return $this->description;
        }
    }