<html>
<head>
	<meta charset="utf-8">
	<title>Busca</title>
	<link rel="stylesheet" type="text/css" href="estilo\style.css"/>
	<link rel = "stylesheet" type="text/css" href="Estilo/Estilo.css"/>
	
</head>
<body>
<form name="form1" method="post" action="delete2.php">
<?php
    $V = $_POST["valor"];
	$Campo = $_POST["campo"];
		
	$host = "localhost";
	$user = "root";
	$password = "";
	$db = "agenda";
	$Comando = "SELECT * FROM contato WHERE $Campo LIKE '$V%'";
	
	$cone = mysqli_connect($host, $user, $password, $db) or die("Erro ao Conectar ao MySQL");
	
	$consulta = mysqli_query($cone, $Comando) or die ("Erro ao executar a Consulta");
	$rs = mysqli_fetch_array($consulta);
   
	echo("Código:$rs[codigo]<br/><br/>
			<label>Nome<br/>
				<input  type='hidden' name='codigo' id='codigo' value='$rs[codigo]' readonly='readonly'>
				<input type='text' name='nome' id='nome' value='$rs[nome]' readonly='readonly'>
			</label><br/><br/>
			<label>E-mail<br/>
				<input type='email' name='email' id='email' value='$rs[email]' readonly='readonly'>
			</label><br/><br/>
			<label>Sexo<br/>
				<select name = 'sexo'><br/>");
				if($rs['sexo']=="m")
				{
					echo("
						<option value = 'm'>Masculino</option>
						<option value = 'f'>Feminino</option>");
				}else
				{
					echo("<option value = 'f'>Feminino</option>
						<option value = 'm'>Masculino</option>");
				}
					echo("</select></label><br/><br/>
					<label>Telefone<br/>
						<input type='text' name='telefone' id='telefone' value='$rs[telefone]' maxlength='13' readonly='readonly'>
					</label><br/><br/>
					<label>Endereço<br/>
						<input type='text' name='endereco' id = 'endereco' value='$rs[endereco]' readonly='readonly'>
					</label><br/><br/>
					<input type = 'submit' name='alterar' id='busca' value='Deletar'/>
					<input type = 'reset' name='limpar' id='limpar' value='Limpar'/>");	
?> 
</form>   
</body>
</html>

