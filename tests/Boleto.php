<?php
    /**
     * Created by PhpStorm.
     * User: brunopaz
     * Date: 2018-12-26
     * Time: 22:50
     */
    include_once "autoload.php";

    use Azpay\API\Acquirers as Acquirers;
    use Azpay\API\Credential as Credential;
    use Azpay\API\Currency as Currency;
    use Azpay\API\Environment as Environment;
    use Azpay\API\Gateway as Gateway;
    use Azpay\API\Transaction as Transaction;

    try {
        $credential = new Credential("1", "d41d8cd98f00b204e9800998ecf8427e", Environment::SANDBOX);
        $gateway = new Gateway($credential);

        ### CREATE A NEW TRANSACTION
        $transaction = new Transaction();

        // Set ORDER
        $transaction->Order()
            ->setReference("ss")
            ->setTotalAmount(1000);

        // Set PAYMENT
        $transaction->Payment()
            ->setAcquirer(Acquirers::ITAU_SHOPLINE)
            ->setCurrency(Currency::BRAZIL_BRAZILIAN_REAL_BRL)
            ->setCountry("BRA")
            ->setExpire("2019-01-12")
            ->setNrDocument(rand(1, 1000000))
            ->setInstructions("Não receber após vencimento");

        // SET CUSTOMER
        $transaction->Customer()
            ->setCustomerIdentity("999999999")
            ->setName("Bruno")
            ->setAddress("Rua teste de varginha")
            ->setAddress2("Apartamento 23")
            ->setPostalCode("08742350")
            ->setCity("São Paulo")
            ->setState("SP")
            ->setCountry("BRASIL")
            ->setCpf("60258170140")
            ->setEmail("brunopaz@test.com");

        // Set URL RETURN
        $transaction->setUrlReturn("http://127.0.0.1:8989/return.php");

        // PROCESS - ACTION
        $response = $gateway->Boleto($transaction);

        // REDIRECT IF NECESSARY (Debit uses)
        if ($response->isRedirect()) {
            print $response->getRedirectUrl();
            //$response->redirect();
        }

        // RESULTED
        if ($response->isAuthorized()) { // Action Authorized
            print "<br>RESULTED: " . $response->getStatus();
        } else { // Action Unauthorized
            print "<br>RESULTED:" . $response->getStatus();
        }

        // REPORT
        $response = $gateway->Report($response->getTransactionID());
        print "<br>REPORTING: " . $response->getStatus();

    } catch (Exception $e) {
        print_r($e->getMessage());
    }

