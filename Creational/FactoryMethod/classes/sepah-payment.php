<?php
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'interfaces.php';
    class Sepah implements PaymentMethod{
        public function __construct(
            private readonly string $token,
            private readonly string $cvv,
        ){}

        public function connect_to_bank():bool{
            echo "Token :{$this->token}, CVV :{$this->cvv} <br>";
            echo "Sepah Bank : connection to server successful ! <br>";
            return true;
        }

        public function payment(int $price): bool{
           echo "Sepah Bank : payment success $$price ! <br>";
           return true;
        } 
    }