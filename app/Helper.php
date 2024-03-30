<?php
function view($file_path, $data=[])
{
  $path = str_replace("\\", DIRECTORY_SEPARATOR, $file_path);
  $path = str_replace(".", DIRECTORY_SEPARATOR, $path);
  $file = APP_ROOT . DIRECTORY_SEPARATOR ."public". DIRECTORY_SEPARATOR .$path.".php";
  
  if (file_exists($file))
  {
    extract($data);
    return require $file;
  }
  throw new Exception("Page Not Found".$file);
}

function redirect($url)
{
  header("Location: $url");
  exit();
}

function pageAdd($file_path)
{
  include_once APP_ROOT."/public/".$file_path;
}
