<?php 

require_once __DIR__ . '/PaymentGateway.php';

class BankTransfer implements PaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} bank transfer done";
    }
}