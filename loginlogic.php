<?php
require_once 'UserClass.php';
require_once 'UserDataAccessObject.php';
if (!empty($_POST['loginUsername'])){
  $user = new User();
  $user->setUsername($_POST['loginUsername']);
  $user->setPassword($_POST['loginPassword']);
  $dao = new UserDAO();
  if($dao->loginCheck($user)==1){
    echo "Login Successful! Hello ".$user->getUsername();
  }

}
 ?>
