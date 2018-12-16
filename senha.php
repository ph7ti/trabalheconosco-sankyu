<?php
	if (isset($_SESSION)){
		session_destroy();
	}
	include "seguranca.php"; // Inclui o arquivo com o sistema de segurança
	protegePagina(); // Chama a função que protege a página
    
    include "conexao.php";
    $usuario = $_SESSION['usuarioLogin'];
    $sql = "SELECT email,senha FROM agenda WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_array($resultado);
    $email = $linha["email"];
    $senha = $linha["senha"];
        
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
            <div id="principal">        
                <div class="col-sm-12">
                    <h2 style="text-align: center;">Alterar Senha</h2>
                    <br/>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-6">
                        <!-- LEMBRAR DE RECOLOCAR OS DADOS AO CARREGAR A PAGINA-->
                        <form method="post" action="alterar_senha.php">                            
                            <div class="input-group form_login">
                                <span class="input-group-addon">Login</span>
                                <input type="text" name="login" maxlength="50" class="form-control" id="login" readonly value="<?php echo $_SESSION['usuarioLogin'];?>">
                            </div><br/>
                            
                            <div class="input-group form_login">
                                <span class="input-group-addon">E-mail</span>
                                <input type="text" name="email" maxlength="50" class="form-control" id="email" placeholder="Digite um email valido" value="<?php echo $email?>">
                            </div><br/>
                            
                            <div class="input-group form_login">
                                <span class="input-group-addon">Senha</span>
                                <input type="password" name="senha" maxlength="50" class="form-control" id="senha" placeholder="Digite sua nova senha para acesso">                            
                            </div><br/>
                            
                            <div class="input-group form_login">
                                <span class="input-group-addon">Senha</span>
                                <input type="password" name="senha2" maxlength="50" class="form-control" id="senha2" placeholder="Redigite a senha de acesso">                            
                            </div><br/>
                            
                            <div class="col-sm-6">
                            <!--<input type="submit" value="Cadastrar" />-->
                                <button type="submit" value="Cadastrar" class="btn btn-success btnSaveBox" style="margin-bottom: 5px; float: left;">
                                    <span class="glyphicon glyphicon-floppy-disk"></span> Salvar
                                </button>
                            </div>
                            <div class="col-sm-6">                        
                                <a href="index.php">
                                    <button type="button" value="" class="btn btn-warning btnSaveBox" style="margin-bottom: 5px; float: right;">
                                        <span class="glyphicon glyphicon-arrow-left"></span> Voltar
                                    </button>
                                </a>
                            </div>
                        </form>
                        
                    </div>
                    <div class="col-sm-3">
                        <!--
                        <h3>Atenç&atilde;o</h3>

                        <p style="text-align: justify;">                        
                            Preencha todos os campos, com dados validos  para
                            ter acesso ao cadastro de seu curriculo.
                            Se você já se cadastrou anteriormente em nosso site                        
                            entre com seu usuário e senha na tela inicial de login.
                        </p>
                        -->
                    </div>
                </div>                                 
                        <!-- Aqui entra o conte�do da p�gina -->
                </br>            
                <br/><br/><br/>
            </div>    
        </div>
    </body>
</html>