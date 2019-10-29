<html lang = "pt-br">
<head>
	<title>Cadastro de Usuário</title>
	<meta charset="UTF=8"/>
	<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
	</head>
<body>
<?php	
		$N = $_POST["nome"];
		$E = $_POST["email"];
		$S = $_POST["sexo"];
		$T = $_POST["telefone"];
		$En = $_POST["endereço"];
		$Comando = "INSERT INTO contato (nome,email,sexo,telefone,endereco) VALUES ('$N','$E','$S','$T','$En');";
		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "agenda";
	//Conectar ao MYSQL
	$cone = mysqli_connect($host,$user,$password, $db) or die ("impossivel se conectar ao MYSQL");
	
	$ins = mysqli_query($cone, $Comando);
	
	if($ins){
		echo("<script>alert('Cadastro realizado com sucesso');
		window.location.href='cadastro.html';</script>");
	}else{
		echo("Impossivel cadastrar!");
	}
?>
</body>
</html>	