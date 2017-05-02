<html>

<head>
<meta charset="UTF-8">
<title>Hello Pocket!</title>
</head>

<body>
	<?php
		echo 'Bem-Vindo Administrador';
		echo "<br /><br />";
	?>
	<form name="searchform" method="post" action="busca.php"><!-- action para o resultado em uma nova página -->
		Página de busca: 
		<input type="submit" value="Ir" />
	</form>
	<?php
		echo "<br /><br />";
	?>
	<form name="searchform" method="post" action="cadastro.php"><!-- action para o resultado em uma nova página -->
		Página de cadastro: 
		<input type="submit" value="Ir" />
	</form>
</body>

</html>
