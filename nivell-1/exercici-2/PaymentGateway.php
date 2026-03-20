<?php

interface PaymentGateway {
    function sendPayment(float $amount): string;
}