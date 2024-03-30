<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController
{
  public function index()
  {
    view("auth.register");
  }
  
  public function register()
  {
    $obj = new User();
    $obj->uname = $_POST["name"];
    $obj->email = $_POST["email"];
    $obj->password = $_POST["password"];
    $obj->ip = $_SERVER["REMOTE_ADDR"];

    if ($obj->signup())
    {
      header("Location:/login");
    } else {
      echo "User unable to Register.";
    }
  }
}
