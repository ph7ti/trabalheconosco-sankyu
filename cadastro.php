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
                include "navbar_logout.php";
                include "menu_head.php";
            ?>
            <div id="principal">        
                <div class="col-sm-12">
                    <h2 style="text-align: center;">Cadastro de acesso</h2>
                    <br/>
                </div>
                <div class="col-sm-12">                
                    <div class="col-sm-6">
                        <form method="post" action="cadastro2.php">
                            <div class="input-group form_login">
                                <span class="input-group-addon">Nome</span>
                                <input type="text" name="nome" maxlength="50" class="form-control" id="nome" placeholder="Digite seu nome completo">
                            </div><br/>
                            <div class="input-group form_login">
                                <span class="input-group-addon">Login</span>
                                <input type="text" name="login" maxlength="50" class="form-control" id="login" placeholder="Digite um login para acesso">
                            </div><br/>
                            <div class="input-group form_login">
                                <span class="input-group-addon">E-mail</span>
                                <input type="text" name="email" maxlength="50" class="form-control" id="email" placeholder="Digite um email valido">
                            </div><br/>
                            <div class="input-group form_login">
                                <span class="input-group-addon">Senha</span>
                                <input type="password" name="senha" maxlength="50" class="form-control" id="senha" placeholder="Digite uma senha para acesso">                            
                            </div><br/>
                            <div class="input-group form_login">
                                <span class="input-group-addon">Senha</span>
                                <input type="password" name="senha2" maxlength="50" class="form-control" id="senha2" placeholder="Redigite a senha">                            
                            </div><br/>
                            <div class="col-sm-6">
                            <!--<input type="submit" value="Cadastrar" />-->
                                <button type="submit" value="Cadastrar" class="btn btn-success btnSaveBox" style="margin-bottom: 5px; float: left;">
                                    <span class="glyphicon glyphicon-floppy-disk"></span> Cadastrar
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
                    <div class="col-sm-5">
                        <h3 align=center>Atenç&atilde;o</h3>
                        <p style="text-align: justify;">                        
                            Preencha todos os campos, com dados validos  para
                            ter acesso ao cadastro de seu curriculo.
                        </p>
                        <p style="text-align: justify;">
                            Se você já se cadastrou anteriormente em nosso site                        
                            entre com seu usuário e senha na tela inicial de login.
                        </p>
                    </div>
                </div>                                 
                        <!-- Aqui entra o conte�do da p�gina -->
                </br>            
                <br/><br/><br/>
            </div>    
        </div>
    </body>
</html>