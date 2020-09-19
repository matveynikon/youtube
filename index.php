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
  //exec("cd vendor/symfony/panther/chromedriver-bin/"); 
  //exec("./update.sh");
  require 'vendor/autoload.php';
  echo("mnames");
  $client = \Symfony\Component\Panther\Client::createFirefoxClient(null, [
      '--no-sandbox'      
  ]);  
  $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
  sleep(5);
?>
</body>
</head>
