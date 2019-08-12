<?php
require_once 'UserClass.php';
class UserDAO {
private $host = null;//"35.244.74.195"; //null;
private $userName  = "root";
private $userPassword  ="finalsdatabase";
private $database = "finalsdatabase";
//null;
private $instancename = "/cloudsql/mockfinalsphp:australia-southeast1:finalsdatabase";

  public function loginCheck(User $checkUser){
        $mysqli =  mysqli_connect($this->host, $this->userName, $this->userPassword, $this->database, null , $this->instancename);
        $query = "SELECT `username` FROM `finalsdatabase`.`tblusers` where `username` = '".$checkUser->getUsername()."' and `password` = '".$checkUser->getPassword()."'";
        $result = mysqli_query($mysqli,$query);
        while($row = mysqli_fetch_row($result)){
          return 1;
        }
        echo $query;
        echo mysqli_error($mysqli);
        return 0;
      }

    public function register(User $checkUser){
          $mysqli =  mysqli_connect($this->host, $this->userName, $this->userPassword, $this->database, null , $this->instancename);
          $query = "INSERT INTO `finalsdatabase`.`tblusers` (`username`, `password`, `email`) VALUES ('".$checkUser->getUsername()."', '".$checkUser->getPassword()."', '".$checkUser->getEmail()."')";
          $result = mysqli_query($mysqli,$query);
          echo mysqli_error($mysqli);
          return 0;
        }
      }

 ?>
