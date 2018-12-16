<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Exclusão</title>
<meta charset="utf-8">

</head>
<body>
<?php


/* recebe o valor dos campos pelo método GET */
$codigo = $_GET['codigo'];
$nome   = $_GET['nome'];

/* Data da exclusao do "cadastro" (login) */
$data_exclusao=(new \DateTime())->format('Y-m-d');    
    
/*
   inclui os comandos PHP necessários para criar a conexão com o banco de dados agenda
*/

include "conexao.php";

/*
	cria o comando SQL para eclusão de registro na tabela agenda
*/ 
$sql = "update agenda set usuario='', senha='', data_exclusao='$data_exclusao' where codigo='$codigo'";
 

/*
$sql = "delete from agenda where codigo='$codigo'";
*/

/*
	executa o comando SQL, enviando o comando para o MySQL.
	Coloc o resultado na variável $resultado
*/
$resultado = mysqli_query($conexao,$sql);

/*
	testar para verificar se houve erro de inclusão
*/

if (!$resultado)
	echo "Erro:" . mysql_error();
else
	echo "Exclusão de $nome realizada com sucesso";
?>

</body>
</html>
