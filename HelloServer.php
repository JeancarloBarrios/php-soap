<?php # HelloServer.php
# Copyright (c) 2005 by Dr. Herong Yang
#
function hello($someone) { 
   return "Hello " . $someone . "!";
} 

function machete($var1, $var2) {
	return json_encode(["var1" => $var1, "var2" => $var2]);
}

function GetPersonByName ($a1, $a2, $a3, $a4, $a5, $a6, $a7) {
	return json_encode(["var1" => $a1, "var2" => $a2, "var3" => $a3]);
}

function GetHomologationTables($holi) {
	return "holi";
}
   $server = new SoapServer("server.wsdl", 
      array('uri' => "urn://www.herong.home/res"));
   // $server->addFunction("hello"); 
    $server->addFunction("GetPersonByName"); 
    $server->addFunction("GetHomologationTables"); 
   $server->handle(); 
?>