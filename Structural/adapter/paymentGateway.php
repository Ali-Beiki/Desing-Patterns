<?php
    class PaymentGateway{
        public function makePayment(int $amount): void {
            echo "paymentGateway : payment $ $amount successfuly !";
        }
    }