<?php
require_once 'UserClass.php';
class UserDAO {
private $host = null;//"35.244.74.195"; //null;
private $userName  = "root";
private $userPassword  = "finalsdatabase";
private $database = "finalsdatabase";
//null;
private $instancename = "/cloudsql/mockfinalsphp:australia-southeast1:finalsdatabase";

  public function __construct(){

  }

  public function loginCheck(User $checkUser){
        $mysqli =  mysqli_connect(null, $this->userName, $this->userPassword, $this->database, null , $this->instancename);
        if ($mysqli->connect_error) {
            		die("Connection failed: " . $mysqli->connect_error);
        	}
        $query = "SELECT `username` FROM `tblusers` where `username` = '".$checkUser->getUsername()."' and `password` = '".$checkUser->getPassword()."'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_row($result)){
          echo $row;
          return 1;
        }
        echo $query;
        echo mysqli_error($mysqli);
        return 0;
      }

    public function register(User $checkUser){
          $mysqli =  mysqli_connect(null, $this->userName, $this->userPassword, $this->database, null , $this->instancename);
          if ($mysqli->connect_error) {
              		die("Connection failed: " . $mysqli->connect_error);
          	}
          $query = "INSERT INTO `tblusers` (`username`, `password`, `email`) VALUES ('".$checkUser->getUsername()."', '".$checkUser->getPassword()."', '".$checkUser->getEmail()."')";
          $result = mysqli_query($mysqli,$query);
          echo mysqli_error($mysqli);
          return 0;
        }
      }

 ?>
