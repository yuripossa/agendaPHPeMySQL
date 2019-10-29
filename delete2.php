<html>
<head>
<meta charset="utf-8">
<title>Deletar</title>
<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
</head>
<body>
<?php

	$codigo=$_POST["codigo"];
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "agenda";
	$delete="DELETE FROM contato WHERE codigo=$codigo;";
	
	//Conectar ao MYSQL
	$cone = mysqli_connect($host, $user, $password, $db) or die ("impossivel se conectar ao MYSQL");
		
	//execultar consulta
	$consulta= mysqli_query($cone, $delete);
		echo("Deletado com sucesso!");
 ?>
 </body>
</html>