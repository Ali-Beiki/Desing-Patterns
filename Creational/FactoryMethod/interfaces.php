<?php
    interface PaymentMethodFactory{
        public function create() :PaymentMethod ;
    }

    interface PaymentMethod{
        public function connect_to_bank() :bool;
        public function payment(int $price):bool;
    }