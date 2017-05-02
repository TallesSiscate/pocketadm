<html><!-- Se não criar a estrutura básica do HTML provavelmente não vai funcionar! -->

<head>
	<meta charset="UTF-8">
	<title>Cadastrando...</title><!-- Título vc coloca se vc quiser -->
</head>

<body>
	<?php
		$host = "146.148.94.117"; // senão for local vc vai colocar as infomações da sua hospedagem, do seu servidor
		$user = "teste";
		$pass = "1234";
		$database = "BancoTCC";
		$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error()); // @mysql_connect PRECISA DO @    // não esquecer do @ na frente do mysql_connect, na última atualização foi acrescentado esse @, então é @mysql_connect    // or die(mysql_error()); ===>> para nos reportar qual é o erro se caso der algum erro
		mysql_select_db($banco) or die(mysql_error()); // or die(mysql_error()); ===>> para nos reportar qual é o erro se caso der algum erro
		
		/*** Acima temos a conexão do banco ***/
	?>
	<?php
		$nome=$_POST['nome'];
		// $sobrenome=$_POST['sobrenome'];
		// $pais=$_POST['pais'];
		// $estado=$_POST['estado'];
		// $cidade=$_POST['cidade'];
		// $email=$_POST['email'];
		$senha=$_POST['senha'];
		
		// $sql = mysql_query("INSERT INTO usuarios(nome, sobrenome, pais, estado, cidade, email, senha) VALUES('$nome', '$sobrenome', '$pais', '$estado', '$cidade', '$email', '$senha')");
		
		$sql = mysql_query("INSERT INTO usuarios(nome, senha) 
		VALUES('$nome', '$senha')");
		
		echo "<center><h1>Cadastro efetuado com sucesso!</h1></center>"; // Vc coloca se vc quiser   // pode colocar um link para voltar se vc quiser
		
		/*** Acima temos a inserção de dados no banco ***/
	?>
</body>

</html>