<html>
<head>
<meta charset="utf-8">
<title>Alterar</title>
<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
</head>
<body>
<?php
	$codigo=$_POST["codigo"];
	$nome=$_POST["nome"];
	$telefone=$_POST["telefone"];
	$email= $_POST["email"];
	$sexo=$_POST["sexo"];
	$endereco=$_POST["endereco"];
	
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "agenda";
	
	$Atualizar="UPDATE contato SET nome='$nome',telefone='$telefone',email='$email',sexo='$sexo',endereco='$endereco' WHERE codigo=$codigo; ";
		
	//Conectar ao MYSQL
	$cone = mysqli_connect($host, $user, $password, $db) or die ("impossivel se conectar ao MYSQL");
	// Selecionar o banco de dados 
	
	//execultar consulta
	$consulta= mysqli_query($cone, $Atualizar);
	echo("Atualizado com sucesso!");
 ?>
 </body>
</html>