<?php

interface StandardPayment {
    public function pay();

}

interface TransactionCheck {
    public function fraudCheck();

}

class Paypal implements StandardPayment{
    public function pay(){}

}

class Visa implements StandardPayment{
    public function pay(){}

}

class Amex implements StandardPayment,TransactionCheck {
    public function pay(){}
    public function fraudCheck(){}
}

class PaymentGateway{
    public function takePayment(StandardPayment $paymentType){
        $paymentType->fraudCheck();  //works ok for AMEX but will fail for other classes
        $paymentType->pay();         // still have an issue even with a second interface
                                     //because this class only accepts StandardPayment
                                    // See my file Interfaces payment gateway2.php
    }

}

// similar to shape example
$visa = new Visa();
$gateway = new PaymentGateway();
$gateway->takePayment($visa);
