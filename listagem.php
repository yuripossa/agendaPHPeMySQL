<html>
<head>
	<meta charset="UTF=8"/>
	<title>Listagem</title>
	<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
	</head>
<body>
<table border="2" width="100%">
<tr><td colspan="6"><center><h1>Listagem</h1></center></tr>
<tr><td>Código<td>Nome<td>Email<td>Sexo<td>Telefone<td>Endereço</tr>
<?php
	$desc = $_POST["ord"];
	$op = $_POST["op"];
	$nom="nome";
	$sex="sexo";
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "agenda";
	$Comando = "SELECT * FROM contato ORDER BY $op $desc";
	
	//Conectar ao MYSQL
	$cone = mysqli_connect($host, $user, $password, $db) or die ("impossivel se conectar ao MYSQL");
	
	//execultar consulta
	$consulta= mysqli_query($cone, $Comando);
	$aux=0;
	while(mysqli_num_rows($consulta)>$aux){
	
	//pegar linha da consulta
	$rs = mysqli_fetch_array($consulta);
	echo("<tr>
			<td>$rs[codigo]
			<td>$rs[nome]
			<td>$rs[email]
			<td>$rs[sexo]
			<td>$rs[telefone]
			<td>$rs[endereco]
		</tr>");
	$aux++;
	}
 ?>
 </table>
 </body>
 </html>