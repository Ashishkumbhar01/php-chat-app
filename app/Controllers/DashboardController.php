<?php
namespace App\Controllers;

class DashboardController
{
  public function index()
  {
    view("dashboard", ["user_name"=>$_SESSION["user"]]);
  }
  
  public function logout()
  {
    $_SESSION=[];
    session_destroy();
    redirect("login");
  }
}
