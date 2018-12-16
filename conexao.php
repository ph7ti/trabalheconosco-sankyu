<?php

/*
	cria conexão com banco de dados agenda
*/
$servidor = "localhost";
$usuario  = "user_cv";
$senha    = "";
$banco    = "trabalheconosco";
$tabela   = "agenda";
$_SG['servidor'] = $servidor;
$_SG['usuario'] = $usuario;
$_SG['senha'] = $senha;
$_SG['banco'] = $banco;
$_SG['tabela'] = $tabela;
 
 // cria a conexão com o banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha)
	or die('Não foi possível conectar: ' . mysql_error());

// seleciona o bano de dados agenda

$select = mysqli_select_db($conexao,$banco);

/*
	Os comandos a seguir são necessários para cadastrar caracteres 
	acentuados e cedilha no banco de dados


mysqli_query("SET NAMES 'utf8'");
mysqli_query('SET character_set_connection=utf8');
mysqli_query('SET character_set_client=utf8');
mysqli_query('SET character_set_results=utf8');
*/
?>
