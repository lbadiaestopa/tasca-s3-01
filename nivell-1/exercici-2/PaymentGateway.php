<?php

interface PaymentGateway {
    public function sendPayment(float $amount): string;
}