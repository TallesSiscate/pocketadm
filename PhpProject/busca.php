<html>

<head>
<meta charset="UTF-8">	
<title>Sistema de busca com PHP</title>
</head>

<body>
	<form name="searchform" method="post" action="results.php"><!-- action para o resultado em uma nova página -->
		Buscar técnicos por nome: <input type="text" name="buscar" />
		<input type="submit" value="Ir" />
	</form>
	<form name="searchform" method="post" action="results-todos.php"><!-- action para o resultado em uma nova página -->
		Buscar técnicos por nome: 
		<input type="submit" value="Ir" />
	</form>
</body>

</html>
<!--
Para o resultado na própria página (senão é o apresentado no código acima):
action="?"  ===>>  uma ? com o endereço dela mais uma ? interrogação e o nome do campo de pesquisa
-->
<!-- 
ação são os resultados, pra onde vai ser direcionado o navegador quando clicarem e buscar
-->