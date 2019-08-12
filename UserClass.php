<?php
class User{
  private $username;
  private $password;
  private $email;
  public function __construct(){

  }

  public function getUsername(){
    return $this->username;
  }

  public function getPassword(){
    return $this->password;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setUsername($username){
    $this->username = $username;
  }

  public function setPassword($password){
    $this->password = $password;
  }

  public function setEmail($email){
    $this->email = $email;
  }
}

 ?>
