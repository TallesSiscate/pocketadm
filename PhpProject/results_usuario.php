<?php
    include "connection.php";
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
</head>

<body>
<hr /><hr /><center><h2>Lista de todos os usuários do sistema</h2></center><hr />
<center><h3>Apps Cliente e Técnico</h3></center><hr />
<?php
    
    $sql = mysql_query("SELECT *
        FROM dados_usuario"); // = igual ao que o usuário digitou que no caso está dentro da ariável buscar
    $row = @mysql_num_rows($sql);// @mysql_num_rows PRECISA DO @   // a contagem no banco de dados é feita pelo row, uma variável que encontre o que estamos procurando no banco de dados, aí daremos um resutado ou uma mensagem de erro
    if($row > 0){
        while ( $linha = mysql_fetch_array($sql) ){
            $nome = $linha['nome']; // = $linha...
            $sobrenome = $linha['sobrenome'];
            $email = $linha['email'];            
            $senha = $linha['senha'];
            $celular = $linha['celular'];
            $facebookid = $linha['facebookid'];
            $token = $linha['token'];
            $datacadastro = $linha['datacadastro'];
            $codtecnico = $linha['codtecnico'];
            $codcliente = $linha['codcliente']; 
            
            echo "<strong>Nome: </strong>".@$nome; // o @ é para que não gere um erro pq a variável ainda não foi recebida caso acesse diretamente
            echo "<br /><br />"; // <br /> ===>> quebra de linha
            echo "<strong>Sobrenome: </strong>".@$sobrenome;
            echo "<br /><br />";
            echo "<strong>email: </strong>".@$email;
            echo "<br /><br />";
            echo "<strong>Senha: </strong>".@$senha;
            echo "<br /><br />";
            echo "<strong>Celular: </strong>".@$celular;
            echo "<br /><br />";
            echo "<strong>ID Facebook: </strong>".@$facebookid;
            echo "<br /><br />";
            echo "<strong>Token: </strong>".@$token;
            echo "<br /><br />";
            echo "<strong>Data do Cadastro: </strong>".@$datacadastro;
            echo "<br /><br />";
            echo "<strong>Código do Técnico: </strong>".@$codtecnico;
            echo "<br /><br />";
            echo "<strong>Código do Cliente: </strong>".@$codcliente;
            echo "<br /><br /><hr />"; // <hr /> ===>> linha divisória
        }
    } else {
        echo "Desculpe, nenhum usuário foi encontrado!";
    }
?>
</body>

</html>