<html lang = "pt-br">
<head>
	<title>Listagem</title>
	<meta charset="UTF=8"/>
	<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
	</head>
<body>
<table border="2" width="100%">
<tr><td colspan="6"><center><h1>Listagem</h1></center></tr>
<tr><td>Código<td>Nome<td>Email<td>Sexo<td>Telefone<td>Endereço</tr>
<?php
$Comando = "";
	$op = $_POST["campo"];
	$text = $_POST["valor"];
	if($op=="codigo"){
	$Comando = "SELECT * FROM contato WHERE codigo=$text;";
	}
	if($op=="nome"){
	$Comando = "SELECT * FROM contato WHERE nome LIKE '%$text%';";
	}
	if($op=="telefone"){
	$Comando = "SELECT * FROM contato WHERE telefone LIKE '%$text%';";
	}
	//Conectar ao MYSQL
		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "agenda";
	//Conectar ao MYSQL
	$cone = mysqli_connect($host,$user,$password, $db) or die ("impossível se conectar ao MYSQL");
	//execultar consulta
	$consulta= mysqli_query($cone, $Comando);
	$aux=0;
	while(mysqli_num_rows($consulta)>$aux){
	//pegar linha da consulta
	$rs = mysqli_fetch_array($consulta);
	echo("<tr><td>$rs[codigo]<td>$rs[nome]<td>$rs[email]
	<td>$rs[sexo]<td>$rs[telefone]<td>$rs[endereco]</tr>");
	$aux++;
	}
 ?>
 </table>
 </body>
 </html>