<?php
  Class Contact {
    private $name;
    private $phone_number;
    private $address;


    function __construct($new_contact_info){
      $this->name;
      $this->phone_number;
      $this->address;
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
      array_push($_SESSION['contact_list'], $this);
    }

    static function getAll(){
      return $_SESSION['contact_list'];
    }

    static function deleteAll(){
      return $_SESSSION['contact_list'] = array();
    }
}


 ?>
