<?php
    require_once(__DIR__.DIRECTORY_SEPARATOR."payment.php");

    class PaymentGatewayAdapter implements Payment {
        public function __construct(private PaymentGateway $paymantGatway) {
            $this->paymantGatway = $paymantGatway;
        }

        public function pay(int $amount): void{
            $this->paymantGatway->makePayment($amount);
        }
    }