<?php
    require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'interfaces.php';
    class SepahFactory implements PaymentMethodFactory{
        public function __construct(
            private readonly string $token,
            private readonly string $cvv,
        ){}        public function create():PaymentMethod{
            return new Sepah($this->token,$this->cvv);
        }
    }