<?php
class User {
  private $name;
  private $address;
  private $phone;
  private $birthday;
  private $email;

  function __construct($name, $address, $phone, $birthday, $email) {
    $this->name = $name;
    $this->address = $address;
    $this->phone = $phone;
    $this->birthday = $birthday;
    $this->email = $email;
  }

  function get_name() {
    return $this->name;
  }
  function set_name($name) {
    $this->name = $name;
  }

  function get_address() {
    return $this->address;
  }
  function set_address($address) {
    $this->address = $address;
  }

  function get_phone() {
    return $this->phone;
  }
  function set_phone($phone) {
    $this->phone = $phone;
  }

  function get_birthday() {
    return $this->birthday;
  }
  function set_birthday($birthday) {
    $this->birthday = $birthday;
  }
  
  function get_email() {
    return $this->email;
  }
  function set_email($email) {
    $this->email = $email;
  }
}