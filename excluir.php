<?php
	include "seguranca.php"; // Inclui o arquivo com o sistema de segurança
	protegePagina(); // Chama a função que protege a página
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Exclusão de Cadastro</title>
        <?php
                include "include_js.php";
        ?>
        <script type="text/javascript">
            /*
                variáveis globais codigo e nome. São usadas para guardar o codigo e o nome
                da linha da tabela clicada. Após a confirmação da exclusão, são enviadas 
                para o programa que fará a exclusão (remove_acesso.php) pela function
                $("#btnExcluir").click(function(evento).
            */
            var codigo = null;
            var nome = null;
            inputAtivo = null;
            $(document).ready(function(){
                <?php
                    /*  
                        inclui o código jQuery que esconde as DIV's de mensagem
                    */
                    include "escondeDiv.php";
                ?>

                $("tr:even").addClass("par");
                $("tr:odd").addClass("impar");
                $("tr").hover(function(){
                        $(this).addClass("comMouse");
                }, function(){
                        $(this).removeClass("comMouse");
                });
                $("tr #apagar").click(function(){
                    /*  
                        coloca nas variáveis globais os campos da linha da 
                        tabela que foi clicada (codigo e nome)
                    */
                    codigo = document.getElementById("codigo").textContent;
                    nome = document.getElementById("nome").textContent;
                    
                    /*codigo = jQuery(this).children("td:first").text();			
                    nome = jQuery(this).children("td:last").text();
                    /* 
                        Confirma a exclusão através de janela pop up
                    */
                    $("#mensagemTexto").html( "Deseja realmente excluir seu cadastro "+nome+"?");
                    $(".tituloJanela h3").text("Exclusão de Cadastro");
                    $("#janelaMsg").janelaPopUp();
                });
                $("#btnExcluir").click(function(evento){
                    /*
                        Essa função só é executada se o usuário clicar no botão "Excluir", exibido
                        pela função $("tr").click(function()). Esse botão aparece na janela pop up
                        de confirmação de exclusão
                        Cancela o comportamento padrão do comando (clique de botão)
                    */
                    evento.preventDefault();

                    /* 
                        função ajax executa assincronamente o programa remove_acesso.php
                        Parâmetros:
                        type: os campos codigo e nome serão enviado junto com o endereço (GET)
                        url: o programa remove_acesso.php será executado
                        success: recebe função que exibirá a resposta gerada pelo 
                                     programa consultar2.php
                    */
                    
                    $.ajax({
                        type: "GET",
                        url: "remove_acesso.php?codigo="+codigo+"&nome="+nome,
                        success: function( resposta )
                        {
                            $("#mensagemTexto").html( resposta );
                                /*
                                    Se existir a palavra "Erro" na resposta recebida, colocar
                                    "Erro de Exclusão" no título da janela. Se não existir,
                                    colocar "Exclusão de Endereço" no título da janela
                                */
                                if (resposta.indexOf("Erro") != -1 ){
                                    $(".tituloJanela h3").text("Erro de Exclusão");
                                }else{
                                    $(".tituloJanela h3").text("Exclusão de Cadastro");
                                }
                            $("#janelaMsg").janelaPopUp();
                            /*
                                Executa de novo  o programa atual para atualizar a tabela, já sem o registro
                                excluído
                            */
                            location.href = "logout.php";
                        }
                    });	
                })	;		

            });
        </script>
    </head>
    <body>
        <div id="container">
            <?php
                include "navbar.php";                
            ?>
                
           <div id="principal">
                <h2 class="centraliza">Exclusão de Cadastro</h2>
               <br/><br/>
                <table align="center">
                    <tr>
                        <th>Número de Cadastro</th>
                        <th>Nome</th>
                        <th style="text-align: center;">Aç&atilde;o</th>
                    </tr>	
                    <?php
                        /*
                            inclui os comandos PHP necessários para criar a conexão com o banco de dados agenda
                        */
                        include "conexao.php";
                        
                        /*
                            cria o comando SQL de consulta na tabela agenda
                        */
                        //$sql = "SELECT codigo,nome from agenda ORDER BY nome";
                        $usuario = $_SESSION['usuarioLogin'];
                        $sql = "SELECT codigo,nome FROM agenda WHERE usuario = '$usuario'";
                        /* 
                            executa o comando SQL inserido na variável string $sql. Coloca o 
                            resultado na variável $resultado. Nesse caso, a variável contém 
                            apenas os campos codigo e nome de todos os registros da tabela 
                            agenda
                        */
                        $resultado = mysqli_query($conexao,$sql);
                        /*
                            a consulta acima retorna toda a tabela, e o comando de repetição
                            "while" a seguir lê este conjunto de dados linha a linha
                        */
                        while ( $linha = mysqli_fetch_array($resultado)) {
                            /*
                                    coloca em variáveis o conteúdo dos campos codigo e nome da linha atual
                            */
                            $codigo = $linha["codigo"];
                            $nome   = $linha["nome"];
                            /*
                                    escreve na resposta HTML a linha de tabela referente ao registro
                                    da tabela sendo processada no momento
                            */
                            echo    "<tr>
                                        <td width='200px' id='codigo'> $codigo </td>
                                        <td id='nome'> $nome </td>
                                        <td width='90px' id='apagar' style='color: #ff0000; text-align: center;'>
                                            <span class='glyphicon glyphicon-trash'></span>
                                            Apagar
                                        </td>
                                    </tr>";
                        }
                    ?>
                </table>
                </br>
                <div style="margin-right: 10%;">
                    
                    <a href="index.php">
                        <button type="submit" value="" class="btn btn-warning btnSaveBox" style="margin-bottom: 5px; float: right;">
                            <span class="glyphicon glyphicon-arrow-left"></span> Cancelar
                        </button>
                    </a>
            
                </div>
                <br/><br/><br/>
            </div>    <!-- fim da Div principal -->
        </div>   <!-- fim da Div container -->
        <!-- mascara para cobrir o site -->	
        <div id="mascara"></div>
        <!-- janela modal para exibir mensagens -->
        <div id="janelaMsg">
            <div class="tituloJanela">
                <h3></h3>                
                <a href="#" class="fechar"><button type="button" class="btn btn-danger btn-xs"><span class='glyphicon glyphicon-remove'></span></button></a>
            </div><br/>
            <p id="mensagemTexto"></p>
            <button class="btnOK" id="btnExcluir"><span class='glyphicon glyphicon-trash'></span> Excluir</button>
        </div>

    </body>
</html>
