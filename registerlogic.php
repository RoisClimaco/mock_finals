<?php
require_once 'UserClass.php';
require_once 'UserDataAccessObject.php';
if (!empty($_POST['registerUsername'])){
  $user = new User();
  $user->setUsername($_POST['registerUsername']);
  $user->setPassword($_POST['registerPassword']);
  $user->setEmail($_POST['registerEmail']);
  $dao = new UserDAO();
  $dao->register($user);
  header("Location: login.php");
}
 ?>
