<?php

interface StandardPaymentInterface {
    public function pay();

}

interface TransactionCheckInterface {
    public function fraudCheck();

}

interface PaymentProcessInterface{

    public function process();
}





class Paypal implements StandardPaymentInterface,PaymentProcessInterface {
    public function pay(){}
    public function process(){
        $this->pay();

    }

}

class Visa implements StandardPaymentInterface,PaymentProcessInterface {
    public function pay(){}
    public function process(){
        $this->pay();
    }

}

class Amex implements StandardPaymentInterface,TransactionCheckInterface,PaymentProcessInterface {
    public function pay(){}
    public function fraudCheck(){}
    public function process(){
        $this->pay();
        $this->process();

    }

}

class PaymentGateway{
    public function takePayment(PaymentProcessInterface $paymentType){
        $paymentType->process();


    }

}

// similar to shape example
$visa = new Visa();
$gateway = new PaymentGateway();
$gateway->takePayment($visa);
