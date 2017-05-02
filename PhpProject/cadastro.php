<html>

<head>
	<meta charset="UTF-8">
	<title>Sistema de Cadastro</title>
</head>
	
<body>
	<!--
		name = nome do formulário
		method = método que será usado
		action = para a página que a pessoa será redirecionada ao clicar no botão cadastrar
		
		type = tipo do que vai no campo
			text = texto
			password = senha criptografada
			submit = tipo de campo para enviar o formulário
		name = nome do campo
		
		value = é o que vai aparecer para pessoa escrito no botão (não precisa de nome (name=))
		
		- ao criar banco no phpmyadmin, não colocar acentos nos nomes das tabelas, senão não vai funcionar
		- no banco o tamanho default do phpmyadmin de comprimento dos valores é 11 (deixar o tamanho para a ID vazio, daí será 11)
		- marcar o ID como como auto-increment (na checkbox A_I)
		- Storage_Engine (tipo da tabela) marcar como MySQL (MyISAM) no dropdown
		
	-->
	<form name="signup" method="post" action="cadastrando.php">
		Nome: <input type="text" name="nome"/><br /><br />
		<!-- Sobrenome: <input type="text" name="sobrenome"/><br /><br />
		País: <input type="text" name="pais"/><br /><br />
		Estado: <input type="text" name="estado"/><br /><br />
		Cidade: <input type="text" name="cidade"/><br /><br />
		E-mail: <input type="text" name="email"/><br /><br />
		-->
		Senha: <input type="password" name="senha"/><br /><br />
		<input type="submit" value="Cadastrar"/><br /><br />
	</form>
</body>

</html>