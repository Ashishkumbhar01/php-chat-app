<?php
namespace App\Controllers;
use App\Models\User;

class NewpassController
{
  public function index(){
    view("auth.new-password");
  }

  public function setPassword(){
    $obj = new User();
    $obj->email = $_POST['email'];
    $obj->password = $_POST['password'];

    if($obj->setPassword()){
      //echo "Password Update please login.";
      redirect("login");
    } else {
      echo "Password not update.";
    }
  }
}
