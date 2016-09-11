<?php
  class Contact {
    private $name;
    private $phone_number;
    private $address;

    function __construct($contact_name, $contact_number, $contact_address){
      $this->name = (string) $contact_name;
      $this->phone_number = $contact_number;
      $this->address = $contact_address;
    }

    function getName(){
      return $this->name;
    }

    function setName($contact_name){
      $this->name = $contact_name;
    }

    function getNumber(){
      return $this->phone_number;
    }

    function setNumber($contact_number){
      $this->phone_number = $contact_number;
    }

    function getAddress(){
      return $this->address;
    }

    function setAddress($contact_address){
      $this->address = $contact_address;
    }

    function save(){
      array_push($_SESSION["contact_list"], $this);
    }

    static function getAll(){
      return $_SESSION["contact_list"];
    }

    static function deleteAll(){
      return $_SESSION["contact_list"] = array();
    }
}


 ?>
