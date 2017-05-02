<?php
$host = "146.148.94.117"; // senão for local vc vai colocar as infomações da sua hospedagem, do seu servidor
$user = "teste";
$pass = "1234";
$database = "BancoTCC";
$connection = @mysql_connect($host, $user, $pass) or die(mysql_error()); // @mysql_connect PRECISA DO @ 
mysql_select_db($database) or die(mysql_error());
?>