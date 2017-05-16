<html>

<head>
<meta charset="UTF-8">
<title>Pocket It Guy - Administradores</title>
</head>

<body>	
    <hr /><hr /><center><h1><strong>Pocket It Guy</strong></h1></center><hr /><hr />
    <center><h2><strong>Painel de Controle de Técnicos</strong></h2></center>
    <center><h3><strong>Acesso Restrito a Administradores</strong></h3></center><hr /><br />
    <form name="searchform" method="post" action="tecnicos.php"><!-- action para o resultado em uma nova página -->
        <center>Buscar todos: 
        <input type="submit" value="Buscar" /></center>
    </form>
    <form name="searchform2" method="post" action="tecnico.php">
        <center>Buscar por CPF: <input type="text" name="buscar" />
        <input type="submit" value="Buscar" /></center>
    </form>
    <form name="searchform3" method="post" action="results_usuario.php">
        <center>Buscar dados de usuarios do sistema: 
        <input type="submit" value="Buscar" /></center>
    </form>
    <!--
    <form name="searchform0" method="post" action="results.php">
        Buscar por nome: <input type="text" name="buscar" />
        <input type="submit" value="Ir" />
    </form>
    -->
</body>

</html>
<!--
Para o resultado na própria página (senão é o apresentado no código acima):
action="?"  ===>>  uma ? com o endereço dela mais uma ? interrogação e o nome do campo de pesquisa
-->
<!-- 
ação são os resultados, pra onde vai ser direcionado o navegador quando clicarem e buscar
-->