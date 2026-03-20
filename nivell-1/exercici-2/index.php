<?php

require_once __DIR__ . '/PaymentProcessor.php';
require_once __DIR__ . '/BankTransfer.php';
require_once __DIR__ . '/PayPalPaymentGateway.php';
require_once __DIR__ . '/StripePaymentGateway.php';
require_once __DIR__ . '/PaymentGateway.php';

$bankPayment = new PaymentProcessor(new BankTransfer());
$payPalPayment = new PaymentProcessor(new PayPalPaymentGateway());
$stripePayment = new PaymentProcessor(new StripePaymentGateway());

echo $bankPayment->processPayment(1234) . PHP_EOL;
echo $payPalPayment->processPayment(4321) . PHP_EOL;
echo $stripePayment->processPayment(6789);