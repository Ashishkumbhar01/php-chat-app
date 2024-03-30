<?php
namespace App\Models;
use PDO;

class User extends BaseModel
{
  public $uname;
  public $email;
  public $password;
  public $ip;
  public $username;
  public $table = "users";
  
  public function signup()
  {
    $query = "SELECT * FROM " . $this->table . " WHERE email= :email";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":email", $this->email);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0){
      return false;
    } else {
      $sql = "INSERT INTO ". $this->table ."(name,email,password,ip) VALUES (:name,:email,:password,:ip)";
      $stmt = $this->conn->prepare($sql);
      $stmt->bindParam(":name", $this->uname);
      $stmt->bindParam(":email", $this->email);
      $stmt->bindParam(":password", $this->password);
      $this->password = password_hash($this->password, PASSWORD_BCRYPT);
      $stmt->bindParam(":ip", $this->ip);
      
      if ($stmt->execute()) {
        return true;
      } else {
        return false;
      }
    }
  }

  public function login()
  {
    $sql = "SELECT * FROM ".$this->table ." WHERE `email`=:email";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":email", $this->email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($row && password_verify($this->password,$row["password"]))
    {
      $this->username = $row["name"];
      return true;
    } else {
      return false;
    }
  }

  public function verify()
  {
    $sql = "SELECT email FROM ".$this->table." WHERE `email`=:email";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":email", $this->email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row){
      return true;
    } else {
      return false;
    }
  }

  public function setPassword()
  {
    $sql="UPDATE ".$this->table." SET `password`=:password WHERE `email`=:email";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(":email", $this->email);
    $stmt->bindParam(":password", $this->password);
    $this->password = password_hash($this->password, PASSWORD_BCRYPT);

    if($stmt->execute()){
      //session_unset('email');
      return true;
    } else {
      return false;
    }
  }

}
