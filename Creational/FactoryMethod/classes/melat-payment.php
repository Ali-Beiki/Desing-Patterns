<?php
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'interfaces.php';
    class Melat implements PaymentMethod{
        public function __construct(
            private readonly string $unic_code,
            private readonly string $password,
            private readonly int $port,
        ){}

        public function connect_to_bank():bool{
            echo "Port :{$this->port}, Uinc Code :{$this->unic_code}, Password :{$this->password} <br>";
            echo "Melat Bank : connection to server successful ! <br>";
            return true;
        }

        public function payment(int $price): bool{
           echo "Melat Bank : payment success $$price ! <br>";
           return true;
        }
    }