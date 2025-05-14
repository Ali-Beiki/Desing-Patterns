<?php
    require_once (__DIR__ .DIRECTORY_SEPARATOR."paymentGateway.php");
    require_once (__DIR__ .DIRECTORY_SEPARATOR."paymentGatewayAdapter.php");
    require_once (__DIR__ .DIRECTORY_SEPARATOR."paymentProcess.php");

    $paymentGateway = new PaymentGateway(); // create
    $paymentGatewayAdapter = new PaymentGatewayAdapter($paymentGateway); // send to adapter
    $paymentProcess = new PaymentProcess($paymentGatewayAdapter); // set payment method

    $paymentProcess->process(3000); // run

    