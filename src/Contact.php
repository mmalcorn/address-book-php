<?php
  Class Contact {
    private $name;
    private $phone_number;
    private $address;

    function __construct($name, $phone_number, $address){
      $this-> (string) name;
      $this-> (string) phone_number;
      $this-> (string) address;
    }

    function getName(){
      $this->name;
    }

    function setName($new_name){
      $this->name = $new_name;
    }

    function getNumber(){
      $this->phone_number;
    }

    function setNumber($new_number){
      $this->phone_number = $new_number;
    }

    function getAddress(){
      $this->address;
    }

    function setAddress($new_address){
      $this->address = $new_address;
    }

    function save(){
      array_push($_SESSION['contact-list'], $this);
    }

    static function getAll(){
      return $_SESSION['contact-list'];
    }

    static function deleteAll(){
      return $_SESSSION['contact-list'] = array();
    }
}


 ?>
