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
                    <div class="col-sm-4">
                        <h2 align=center>Sankyu S.A.</h2>
                        <h3>A Empresa</h3>
                        <p style="text-align: justify;">
                            Fundada em 1972, a SANKYU S.A. é uma empresa do grupo SANKYU INC., multinacional de origem japonesa.  No Brasil, a Sankyu atua principalmente em empresas siderúrgicas, além de prestar serviços em vários outros segmentos industriais, tais como obras de montagem eletromecânica em geral e manutenção de equipamentos industriais, apoio operacional e serviços de logística interna.
                            Com matriz localizada na capital mineira, Belo Horizonte, a SANKYU S.A. possui importantes filiais, uma delas presente a mais de 20 anos na cidade de Volta Redonda
                        </p>
                        <br/>
                        <h3>ORIGEM DO NOME</h3>
                        <p style="text-align: justify;">
                            Em 1918, no Japão, a SANKYU S.A. iniciou suas atividades como transportadora de mercadorias entre Kyushu e a região montanhosa de Sanyo, de onde originou o nome SANKYU, resultado da união de SAN + KYU.
                        </p>
                    </div>
                
                    <div class="col-sm-8">
                        <h2 align=center>Sankyu Volta Redonda</h2>
                        <h3>A Filial</h3>
                        <p style="text-align: justify;">
                            A SANKYU – filial Volta Redonda – foi fundada em 1º de junho de 1994 e iniciou suas atividades na preservação e manutenção das baterias de coque na Companhia Siderúrgica Nacional (CSN). Atualmente, considerando apenas a filial carioca, a SANKYU conta com 2.100 funcionários.</p>
                        <p style="text-align: justify;">
                            Antes de se estabelecer no Rio de Janeiro, a SANKYU – filial Volta Redonda – participou da construção do alto forno n. 3, em 1973, com a supervisão técnica e a reforma da laminação de tiras a frio 1 e 2 em 1982.<br>
                            Qualidade, presteza e comprometimento em suas atividades fazem com que, cada vez mais, a SANKYU S.A se torne uma referência na prestação de serviços em montagem e manutenção de equipamentos industriais.</p>
                        <p style="text-align: justify;">
                            Desde sua fundação, a SANKYU – filial Volta Redonda – já executou serviços de manutenção</p>
                        <p style="text-align: justify;">
                            Em 2002, a empresa iniciou as atividades de prestação de serviços de manutenção eletromecânica na área de metalurgia (pátios de carvão e de minérios, área de sinterizações, altos fornos, PCI e Stock House e aciaria), bem como em áreas de Utilidades (Centrais Termoelétricas I e II - CTE), no segmento de carboquímicos, fábrica de cal e manutenção eletromecânica de pontes rolantes.</p>
                        <p style="text-align: justify;">
                            Atualmente, a SANKYU – filial Volta Redonda – adicionou ao seu portfólio de serviços a manutenção eletromecânica de equipamentos de laminação, realizando reparos gerais na Linha de Tiras a Quente (LTQ), linhas de decapagem 3 e 4, a Linha de Preparação de Bobinas a Quente (LPBQ), Usinas de Recuperação (URA) de Aço 1 e 2 e ainda, esporadicamente, a Linha de Recozimento Contínua 2 (LZC).<br>
                            Em 2010, dando prosseguimento ao seu processo de expansão, a SANKYU – filial Volta Redonda – prestou serviços de manutenção elétrica e mecânica na aciaria da Votorantim Siderurgia S.A., nas unidades Barra Mansa e Resende, ambas no estado do Rio de Janeiro.</p>
                        <p style="text-align: justify;">
                        
                    </div>
                </div>
                <br/><br/><br/>
            </div>    
        </div>
    </body>
</html>