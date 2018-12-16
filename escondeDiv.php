<?php
	/*
		funções que escondem as divs masacara e janelaMsg quando
		o botão com a classe .btnOK e o link com a classe .fechar 
		forem clicados. Se usuário clicar sobre a div mascara também 
		esconde.
	*/
	echo '$("#mascara").click(function(){
		$(this).hide();
 		$("#janelaMsg").hide();
 		$(inputAtivo).focus();
	});

	$(".fechar").click(function(){
		$("#mascara").hide();
		$("#janelaMsg").hide();
 		$(inputAtivo).focus();
	});

	$(".btnOK").click(function(){
		$("#mascara").hide();
		$("#janelaMsg").hide();
		$(inputAtivo).focus();
	})';
?>