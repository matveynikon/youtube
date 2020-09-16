<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
    <p>hello there, matthew here</p>
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);  
  exec("kill $(lsof -t -i:9515)"); 
  //exec("php panther.php");
  require 'vendor/autoload.php';
  echo("mnames");
  $client = \Symfony\Component\Panther\Client::createChromeClient();  
  $client->request('GET', 'https://www.youtube.com/');
?>
</body>
</head>
