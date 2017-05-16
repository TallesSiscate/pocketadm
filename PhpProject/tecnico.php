<?php
    include "connection.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Tecnico</title>
</head>

<body>
<hr /><hr /><center><h2>Aprovação do Cadastro de Técnico</h2></center><hr />
<center><h3>Avaliação de Situação de Cadastro</h3></center><hr />
<?php
	$buscar=$_POST['buscar'];
	$sql = mysql_query("SELECT *
		FROM tecnicos
		WHERE cpf LIKE '%".$buscar."%'"); // = igual ao que o usuário digitou que no caso está dentro da ariável buscar
	$row = @mysql_num_rows($sql);// @mysql_num_rows PRECISA DO @   // a contagem no banco de dados é feita pelo row, uma variável que encontre o que estamos procurando no banco de dados, aí daremos um resutado ou uma mensagem de erro
	if($row > 0){
		while ($linha = mysql_fetch_array($sql)){
			$cpf = $linha['cpf'];
			$codtecnico = $linha['codtecnico']; // $codtecnico = $linha...  // codtecnico int
			$cadastro_aprovado = $linha['cadastro_aprovado']; // $cadastro_aprovado = $linha...
			
			$formacao = $linha['formacao'];
			$resumoProf = $linha['resumoProf'];
			$img_doc_blobkey = $linha['img_doc_blobkey'];
			$img_doc_servingUrl = $linha['img_doc_servingUrl'];
			$rua = $linha['rua'];
			$numerolocal = $linha['numerolocal'];
			$complementolocal = $linha['complementolocal']; 
			$cidade = $linha['cidade']; 
			$cep = $linha['cep'];
			$avg_notaconhecimento = $linha['avg_notaconhecimento'];
			$avg_notaagilidade = $linha['avg_notaagilidade'];
			$avg_notapontualidade = $linha['avg_notapontualidade'];
			$avg_notacarisma = $linha['avg_notacarisma'];
			$avg_notaapresentacao = $linha['avg_notaapresentacao'];

			echo '<strong>Código do técnico: </strong>'.@$codtecnico.'<br />'; // o @ é para que não gere um erro pq a variável ainda não foi recebida caso acesse diretamente
			echo '<strong> - CPF: </strong>'.@$cpf."<br />";
			echo "<strong> - Formação: </strong>".@$formacao."<br />";
			echo "<strong> - Resumo profissional: </strong>".@$resumoProf."<br /><br />";
			echo "<strong> - CEP: </strong>".@$cep."<br />";
			echo "<strong> - Cidade: </strong>".@$cidade."<br />";
			echo "<strong> - Rua/Avenida: </strong>".@$rua."<br />";
			echo "<strong> - Número: </strong>".@$humerolocal."<br />";
			echo "<strong> - Complemento: </strong>".@$complementolocal."<br /><br />";
			echo "<strong> - Imagem do documento blobkey: </strong>".@$img_doc_blobkey."<br />";
			echo "<strong> - Imagem do documento servingUrl: </strong>".@$img_doc_servingUrl."<br /><br />";
			echo "<strong> - Média da Nota Conhecimento: </strong>".@$avg_notaconhecimento."<br />";
			echo "<strong> - Média da Nota Agilidade: </strong>".@$avg_notaagilidade."<br />";
			echo "<strong> - Média da Nota Pontualidade: </strong>".@$avg_notapontualidade."<br />";
			echo "<strong> - Média da Nota Carisma: </strong>".@$avg_notacarisma."<br />";
			echo "<strong> - Média da Nota Apresentacao: </strong>".@$avg_notaapresentacao."<br /><br /><br />";
			echo "<strong> - Situação do cadastro deste técnico: </strong>".@$cadastro_aprovado."<br />";
			echo '(0 = Não analisado, 1 = Aprovado, -1 = Reprovado)';
			// echo "<br /><br />";
			// echo '<strong>Editar situação? Escolha o número: <strong> 
					// <input type="number" name="resposta" min="-1" max="1">';
			// echo "<br /><br />";
			// echo '<strong> Para validar a edição digite o Código e o CPF do técnico: <strong> 
					// <input type="text" name="codtecnico">';
			// echo ' <input type="submit" value="Editar"/>';
			// echo "<br />";
			echo "<br /><hr />";
		}
	} else {
		echo "Desculpe, nenhum técnico com este CPF foi encontrado!";
	}
?>
<form name="signup" method="post" action="alterando.php">
	Alterar situação? Digite o número: <input type="number" name="cadastro_aprovado"><br /><br />
	Para validar a alteração digite o CPF do técnico: <input type="text" name="cpf"/><br /><br />
	<input type="submit" value="Alterar"/><br /><br />
</form>
</body>

</html>