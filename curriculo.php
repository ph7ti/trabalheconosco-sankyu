<?php
    include "seguranca.php"; // Inclui o arquivo com o sistema de segurança
    protegePagina(); // Chama a função que protege a página
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Curriculo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
        include "include_js.php";
    ?>
        <script src="js/form.js" type="text/javascript"></script>
        <script type="text/javascript">
            /* 
                    variável global usada para guardar o campo de formulário 
                    que vai receber foco. Usado após erro de digitação  
            */
            var inputAtivo = null;
            $(document).ready(function(){
		/* 
			Coloca o cursor no input com id="nome". Executado logo
			após a página ser carregada
		*/
		$("#nome").focus();
		$("#cep").mask("99.999-999");                
                $("#cpf").mask("999.999.999-99");
                $("#data_nascimento").mask("99/99/9999");
                $("#celular").mask("99 99999-9999");
                $("#telefone").mask("99 9999-9999");
                $("#pret_salarial").mask("99.999,00");                
                $("#ult_emp_salario").mask("99999.00");
                $("#ult_emp_data_contrat").mask("99/99/9999");
                $("#ult_emp_data_demiss").mask("99/99/9999");
                
		<?php
			/*  
				inclui o código jQuery que esconde as DIV's de mensagem
			*/
			include "escondeDiv.php";
		?>
		/* 
			Função executada quando o botão com id="btnVoltar" for
			clicado. O comando location.href executa o programa
			alterar1.php 
		*/
		$("#btnVoltar").click(function(){
			location.href = "index.php";
		});

		/*
			Função usada para enviar os dados do formulário.
		*/
		$('#formAjax').submit(function(evento){
			/*
				Cancela o envio automático do formulário. Todo o processo
				será controlada dentro dessa função
			*/
			evento.preventDefault();
			/*
				Se não ocorreram erros de validação, envia dados do formulário para o programa alterar.php
			*/
			if (validarDados(this)) {
				/* 
					método .serialize() cria a string com os dados do formulário, 
					que serão passados para a função ajax.
				*/
				var dados = jQuery( this ).serialize();
				/* 
					Função utilitária jQuery $.ajax - envia os daos do formulário para
					um programa PHP. Seus parâmetros são informados em formato de lista
					{ parâmetro:valor, parâmetro:valor,...}. 
					Parâmtros informados:
					type- tipo de método de envio(POST)
					url: programa que será executado (alterar.php)
					data: string com os dados do formulário
					success: função javascript que será executada se o programa informado no
						     parâmtro url terminar normalmente. Essa função recebe como parãmetro
						     a string "resposta", que contém a resposta HTML gerada pelo programa PHP
						     executado.
				*/
				$.ajax({
					type: "POST",
					url: "alterar.php",
					data: dados,
					success: function( resposta )
					{
						/* 
							O método .html() coloca a string resposta detro da tag <p> 
							com id="mensagemTexto" (ver DIV com id="janelaMsg")
						*/
						$("#mensagemTexto").html( resposta );
						/*
							Se existir a palavra "Erro" na resposta recebida, colocar
							"Erro de Cadastramento" no título da janela. Se não existir,
							colocar "Dados enviados" no título da janela, e limpar os 
							campos do formulário para nova inclusão de endereço.

							método javascript indexOf("string")- procura na string original a string 
							informada como parâmetro. Se não encontrar, devolve -1. Se encontrar,
							devolve a posição do primeiro caracter da string informada como parâmetro
							na string original.
						*/
						if (resposta.indexOf("Erro") != -1 ){
							$(".tituloJanela h3").text("Erro de Cadastramento");
                                                }else {
								/*
									Limpa os campos do formulário para nova inclusão. Para o javascript, o
									formulário é um vetor, por isso para usar o método reset é necessário
									informar o índice [0], que faz referência direta ao comando <form>.
								*/
								$('#formAjax')[0].reset();
								$(".tituloJanela h3").text("Dados Salvos");
							}
							
						/* Exibe a janela com a mensagem recebida */
						$("#janelaMsg").janelaPopUp();
					}
				});			
			}
			/*
				Informa o id do <input> que vai receber o cursor
   			*/
  			inputAtivo = "#nome";		
		});
            });
        </script>
    </head>
    <body>
        <div id="container">   
            <?php
                 include "navbar.php";           
            ?>
            <div id="principal">
                <?php
                        /* 
                                Nesse ponto o programa consulta o registro com a chave primária igual ao campo
                                codigo enviado.

                        
                                inclui os comandos PHP necessários para criar a conexão com o banco de dados agenda
                        */
                        include "conexao.php";
                            $usuario = $_SESSION['usuarioLogin'];
                            $sql = "SELECT codigo FROM agenda WHERE usuario = '$usuario'";
                            $resultado = mysqli_query($conexao,$sql);
                            $linha = mysqli_fetch_array($resultado);
                            $codigo = $linha["codigo"];
                        /*
                                Consulta o registro de Agenda com chave primária contida na	variável $codigo, e
                                coloca os dados em variáveis PHP
                        */
                        include "ConsRegAgenda.php";
                ?>
                <h2 class="centraliza">Dados Cadastrais</h2>
                <div class="col-sm-12">
                    <form id="formAjax">                   
                        <fieldset>
                            <?php                                                            
                                include "dados_cadastrais.php";
                            ?>                          
                        </fieldset>                    
                    </form> 
                </div>
                </br>
                <div class="col-sm-12">
                    <br/><br/><br/>                   
                </div>
            </div> <!-- Fim da div principal -->
        </div> <!-- Fim da div container -->
        <!-- mascara para cobrir o site -->	
        <div id="mascara"></div>
        <!-- janela modal para exibir mensagens -->
        <div id="janelaMsg">
            <div class="tituloJanela">
                <h3></h3>
                <a href="#" class="fechar">
                    <button type="button" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </a>
            </div>    
            <p id="mensagemTexto" class="centraliza"></p>
            <!--<button class="btnOK"><a href="alterar1.php">OK</a></button>-->
            <!--<input class="btnOK" type="button" onClick="window.location='#';" value="OK">-->
            <!--  -->
            <!--<a href="#" class="fechar">-->
            <a href="curriculo.php" class="fechar">
                <button type="submit" value="Enviar" class="btn btn-success btnSaveBox">
                    OK
                </button>
            </a>
        </div>
    </body>
</html>