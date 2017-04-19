<?php
// server
class MySoapServer
{
  public function getMessage()
  {
    return 'Hello,World!';
  }
  
  public function addNumbers($num1,$num2)
  {
    return $num1+$num2;
  }
}
$options= array('uri'=>'http://machete.dev');
$server=new SoapServer(NULL,$options);
$server->setClass('MySoapServer');
$server->handle();
// client
$options= array(
  'location' 	=>	'http://machete.dev/?wsdl',
  'uri'		=>	'http://machete.dev/?wsdl'
);
$client=new SoapClient(NULL,$options);
echo $client->getMessage();  //Hello,World!
echo $client->addNumbers(3,5); //  8

?>