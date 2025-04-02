<?php
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'interfaces.php';
    class MelatFactory implements PaymentMethodFactory{
        public function __construct(
            private readonly string $unic_code,
            private readonly string $password,
            private readonly int $port,
        ){}
        public function create():PaymentMethod{
            return new Melat($this->unic_code,$this->password,$this->port);
        }
    }

    