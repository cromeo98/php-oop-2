<?php

// user classe genitore

class User {

    public $userName;
    protected $password;

    function __construct($_userName, $_password){
        $this->userName = $_userName;
        $this->password = $_password;
    }

    public function getAnagraphUser(){
        return $this->userName . ' ' . $this->password;
    }

}
