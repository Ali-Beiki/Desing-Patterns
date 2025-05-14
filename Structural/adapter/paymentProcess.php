<?php
    class PaymentProcess {
        public function __construct(private Payment $payment) { 

        }

        public function process(int $amount): void {
            $this->payment->pay($amount);
        }
    }