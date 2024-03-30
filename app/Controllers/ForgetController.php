<?php
namespace App\Controllers;
use App\Models\User;

class ForgetController
{
  public function index()
  {
    view("auth.forget");
  }

  public function verify(){
    $obj = new User();
    $obj->email = $_POST['email'];

    if($obj->verify()){
      //echo "found";
      $_SESSION['email']=$_POST['email'];
      redirect("new-password");
    } else {
      //echo "This email not exist or Invalid.";
      redirect("login");
    }
  }
}
