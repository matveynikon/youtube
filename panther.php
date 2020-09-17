  require 'vendor/autoload.php';
  echo("mnames");
  $client = \Symfony\Component\Panther\Client::createChromeClient();  
  $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
  sleep(5);
