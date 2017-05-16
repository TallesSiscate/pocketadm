<?php
    include "connection.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Todos os tecnicos</title>
</head>

<body>
<hr /><hr /><center><h2>Lista de Técnicos</h2></center><hr />
<center><h3>Identificados por código</h3></center><hr />
<?php
	$sql = mysql_query("SELECT *		FROM tecnicos");
	$row = @mysql_num_rows($sql); // @mysql_num_rows PRECISA DO @
	// a contagem no banco de dados é feita pelo row, uma variável que encontre o que estamos procurando no banco de dados, aí daremos um resutado ou uma mensagem de erro
	if($row > 0) {
		while( $linha = mysql_fetch_array($sql) ) {
			$codtecnico = $linha['codtecnico']; // = $linha...  // codtecnico int
			$cadastro_aprovado = $linha['cadastro_aprovado']; // = $linha...
			$cpf = $linha['cpf'];
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

			echo '<h3><strong>Código do técnico: </strong>'.@$codtecnico.'</h3><br />'; // o @ é para que não gere um erro pq a variável ainda não foi recebida caso acesse diretamente
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
			echo '(0 = Não analisado, 1 = Aprovado, -1 = Reprovado)<br /><br /><hr />';
		}
	} else {
		echo "Desculpe, nenhum técnico foi encontrado!";
	}
?>
</body>

</html>