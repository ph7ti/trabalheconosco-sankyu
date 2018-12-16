<?php
	if (isset($_SESSION)){
		session_destroy();
	}
	include "seguranca.php"; // Inclui o arquivo com o sistema de segurança
	protegePagina(); // Chama a função que protege a página
        
?>
<html lang="pt-br">
    <head>
        <title>Trabalhe Conosco</title>
        <?php
            include "include_js.php";
        ?>
    </head>
    <body>
        <div id="container">   
            <?php
                include "navbar.php";                
            ?>
            <div id="principal" style="">
                        <!-- Aqui entra o conte�do da p�gina -->
                <div class="col-sm-12" style="padding-bottom: 7%;">
                    <h2 align=center>Bem Vindo</h2>
                    <div class="col-sm-6">
                       
                        <h3 align=center>Como cadastrar seu curriculo</h3>
                        <br/>
                        <p style="text-align: justify;">
                            Venha fazer parte da nossa equipe! Insira seus dados na aba "CADASTRO" para participar
                            de nossos processos de seleção. Você será redirecionado ao currículo, com os dados
                            previamente preenchidos. Agora, basta completar os outros campos nos itens:
                            “Dados Pessoais”, “Objetivos”, “Resumo profissional”, “Formação acadêmica e
                            complementar”, “Idiomas”, “Histórico Profissional” e “Informações Complementares”;
                            <br/>
                        </p>
                        <p style="text-align: justify;">
                            <b>Importante:</b><br/> Após o preenchimento, não se esqueça de clicar no botão 
                            “Salvar” para que o sistema guarde as atualizações.
                        </p>
                    </div>
                    <!--
                    <div class="col-sm-4">
                        <h3 align=center>Conheça nossa Empresa</h3>
                        <br/>
                        <!--
                        <p style="text-align: justify;">
                            Não conhece a SANKYU? Saiba mais da historia da empresa e sua filial de Volta Redonda na aba "SANKYU S.A.".
                        </p>
                       
                        <p style="text-align: justify;">
                            Fundada em 1972, a SANKYU S.A. é uma empresa do grupo SANKYU INC., multinacional de origem japonesa. No Brasil, a Sankyu atua principalmente em empresas siderúrgicas, além de prestar serviços em vários outros segmentos industriais, tais como obras de montagem eletromecânica em geral e manutenção de equipamentos industriais, apoio operacional e serviços de logística interna. Com matriz localizada na capital mineira, Belo Horizonte, a SANKYU S.A. possui importantes filiais, uma delas presente a mais de 20 anos na cidade de Volta Redonda                        
                        </p>
                        <a href="sankyu.php" class="fechar">
                            <button type="button" value="" class="btn btn-info btnSaveBox">
                                Saiba mais
                            </button>
                        </a>
                    </div>
                    -->
                    <div class="col-sm-6">
                        <h3 align=center>Fale Conosco</h3>
                        <br/>
                        <h4 align=center>MATRIZ:</h4>                        
                        <p style="text-align: right;">                                                        
                            Av. do Contorno, 6.283 – s/1.001/8
                            30110-931 – Belo Horizonte – MG
                            Tel.: (31) 3073-9550 
                            <br/>e-mail: dtc@sankyu.com.br
                        </p>
                        <br/>
                        <h4 align=center>FILIAL VOLTA REDONDA:</h4>                        
                        <p style="text-align: right;">                                                                                 
                            Av. Almirante Adalberto de Barros Nunes, 3804 – Retiro
                            <br/>CEP.: 27274-200 – Volta Redonda – RJ
                            <br/>Tel.:  Escritório de Representação: (24) 3025-1929
                            <br/>E-mail:sankyuvr@sankyu.com.br
                        </p>
                    </div>
                    <br/><br/><br/>
                </div>
            </div>    
        </div>
    </body>
</html>