<html><!-- Se não criar a estrutura básica do HTML provavelmente não vai funcionar! -->

<head>
	<meta charset="UTF-8">
	<title>Alterando...</title><!-- Título vc coloca se vc quiser -->
</head>

<body>
	<?php
		$host = "146.148.94.117"; // se não for local vc vai colocar as infomações da sua hospedagem, do seu servidor
		$user = "teste";
		$pass = "1234";
		$banco = "BancoTCC";
		$conexao = @mysql_connect($host, $user, $pass) or die(mysql_error()); // @mysql_connect PRECISA DO @    // não esquecer do @ na frente do mysql_connect, na última atualização foi acrescentado esse @, então é @mysql_connect    // or die(mysql_error()); ===>> para nos reportar qual é o erro se caso der algum erro
		mysql_select_db($banco) or die(mysql_error()); // or die(mysql_error()); ===>> para nos reportar qual é o erro se caso der algum erro
		
		/*** Acima temos a conexão do banco ***/
	?>
	<?php
		$cadastro_aprovado = $_POST['cadastro_aprovado'];
		$cpf = $_POST['cpf'];
		$sql = mysql_query("UPDATE tecnicos
			SET `cadastro_aprovado`='$cadastro_aprovado'
			WHERE cpf LIKE '%$cpf%'");
		echo "<center><h1>Cadastro editado com sucesso!</h1></center>"; // Vc coloca se vc quiser   // pode colocar um link para voltar se vc quiser
	?>
</body>

</html>