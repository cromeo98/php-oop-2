
<?php

// Companycustomer classe figlia di customer

require_once 'Customer.php';

class Companycustomer extends Customer {

    public $company;
    public $invoiceAddress;
    public $phone;

    function __construct($_company, $_invoiceAddress){
        $this->company = $_company;
        $this->invoiceAddress = $_invoiceAddress;
    }

    public function setPhone($_phone){
        $this->phone = $_phone;
    }

    public function getPhone(){
        return $this->phone;
    }

    public function getAnagraphCompany(){
        return $this->userName . ' ' . $this->password . ' '. $this->company . ' ' . $this->invoiceAddress . ' ' . $this->phone;
    }

}