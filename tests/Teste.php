<?php
    /**
     * Created by PhpStorm.
     * User: brunopaz
     * Date: 2018-12-26
     * Time: 22:50
     */

    include_once("../src/azpay/API/Gateway.php");
    include_once("../src/azpay/API/Verification.php");
    include_once("../src/azpay/API/Transaction.php");
    include_once("../src/azpay/API/Order.php");
    include_once("../src/azpay/API/Payment.php");
    include_once("../src/azpay/API/Authorize.php");
    include_once("../src/azpay/API/Billing.php");

    use Azpay\API\Gateway as Gateway;
    use Azpay\API\Transaction as Transaction;

    $gateway = new Gateway("sandbox");

    $transaction = new Transaction("1.0.0", "1", "d41d8cd98f00b204e9800998ecf8427e");
    $transaction->setUrlReturn("http://0.0.0.0:8888/v1/returner");
    $transaction->setFraud("true");

    $transaction->Order()
        ->setReference("ss")
        ->setTotalAmount("1000");

    $transaction->Payment()
        ->setAcquirer("26")
        ->setMethod("1")
        ->setAmount("1000")
        ->setCurrency("986")
        ->setCountry("BRA")
        ->setNumberOfPayments("1")
        ->setFlag("visa")
        ->setCardHolder("Bruno paz")
        ->setCardNumber("4111111111111111")
        ->setCardSecurityCode("123")
        ->setCardExpirationDate("202012")
        ->setSoftDescriptor("Bruno paz");


    $transaction->Billing()
        ->setCustomerIdentity("1");


    $response = $gateway->authorize($transaction);
    print_r($response);