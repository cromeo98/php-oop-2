<?php

// customer classe figlia di user

require_once 'User.php';

class Customer extends User {

    protected $firstName;
    protected $lastName;
    protected $address;
    protected $shippingAddress;
    protected $creditCard;

    function __construct($_firstName, $_lastName, $_address, $_shippingAddress, $_creditCard){
        $this->firstName = $_firstName;
        $this->lastName = $_lastName;
        $this->address = $_address;
        $this->shippingAddress = $_shippingAddress;
        $this->creditCard = $_creditCard;
    }

    public function getAnagraphCustomer(){
        return $this->userName . ' ' . $this->password . ' '. $this->firstName . ' ' . $this->lastName;
    }

}