<?php
namespace App\Config;
use PDO;

class Database
{
  private $user = "root";
  private $host = "localhost:3306";
  private $password = "root";
  private $db = "chatapp";
  public $conn;
  
  public function __construct()
  {
    $this->conn = null;
    try{
      $this->conn = new PDO('sqlite:database.sqlite');
   // $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db",$this->user,$this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
      echo "Connection: ". $e->getMessage();
    }
  }
  
  public function fetchData($query, $params=[])
  {
    try {
      $stmt = $this->conn->prepare($query);
      $stmt->execute($params);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      return false;
    }
  }
  
  public function fetchSingle($query)
  {
    $stmt = $this->conn->query($query);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}
