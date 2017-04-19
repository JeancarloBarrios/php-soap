<?php # HelloClient.php
# Copyright (c) 2005 by Dr. Herong Yang
#
   $client = new SoapClient("server.wsdl",  array(
      'location' => "http://machete.dev/HelloServer.php",
      'uri'      => "urn://www.herong.home/req",
      'trace'    => 1 ));

   // /
   $return = $client->__soapCall("GetHomologationTables",["world"]);
   //echo 
    print_r($return);

   // echo("\nDumping request headers:\n" 
   //    .$client->__getLastRequestHeaders());

   // echo("\nDumping request:\n".$client->__getLastRequest());

   // echo("\nDumping response headers:\n"
   //    .$client->__getLastResponseHeaders());

   // echo("\nDumping response:\n".$client->__getLastResponse());
?>