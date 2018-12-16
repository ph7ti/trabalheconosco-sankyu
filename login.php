<?php
	include "seguranca.php"; // Inclui o arquivo com o sistema de segurança
	expulsaVisitante2();
?>
<html lang="pt-br">
    <head>
        <title>Trabalhe Conosco</title>
        <?php
            include "include_js.php";
        ?>

        <script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="container">   
            <?php
                include "navbar_logout.php";                
            ?>
            <div id="principal">
                <div class="container-fluid bg-1 col-sm-7  col-xs-8">
                    <div class="col-sm-12  col-xs-12">
                    
                        
                        
                        
                        
                        
                        <div class="container">        
                            <div class="row">
                                <div class="col-md-7">
                                    <div id="meuCarrossel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicadores -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#meuCarrossel" data-slide-to="0" class="active"></li>
                                            <li data-target="#meuCarrossel" data-slide-to="1"></li>
                                            <li data-target="#meuCarrossel" data-slide-to="2"></li>
                                            <li data-target="#meuCarrossel" data-slide-to="3"></li>
                                           
                                        </ol>
                                        <!-- Container dos slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <img src="imagens/banner_1.jpg" alt="" class="caroulsel_login" style="width:700px;">
                                                <div class="carousel">
                                                    <h3>Slide 1 &#8212; Normandia França</h3>  
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="imagens/banner_2.jpg" alt="" class="caroulsel_login" style="width:700px;">
                                                <div class="carousel">
                                                    <h3>Slide 2 &#8212; Normandia França</h3>  
                                                    <p>Morbi eleifend, purus quis laoreet faucibus.</p>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="imagens/banner_3.jpg" alt="" class="caroulsel_login" style="width:700px;">
                                                <div class="carousel">
                                                    <h3>Slide 3 &#8212; Normandia França</h3>
                                                    <p>Phasellus libero felis, blandit nec</p>
                                                </div>
                                            </div>
                                        </div> <!-- /.carousel-inner -->
                                        <!-- Controles -->
                                        <a class="left carousel-control" href="#meuCarrossel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Anterior</span>
                                        </a>
                                        <a class="right carousel-control" href="#meuCarrossel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Próximo</span>
                                        </a>
                                    </div> <!-- /#meuCarrossel -->
                                </div> <!-- /.col-md-12 -->
                            </div> <!-- /.row -->
                        </div> <!-- /.container -->

            

                        
                        
                        
                        
                        
                    </div>
                </div>
                <div class="container-fluid bg-1 col-sm-5 col-xs-6">
                    </br>  
                    <form method="post" action="valida.php" style="width: 400px;">
                        <div class="input-group form_login col-sm-9 col-xs-12">
                            <span class="input-group-addon">Login</span>
                            <input type="text" name="usuario" class="form-control" id="usuario">
                        </div><br/>                                              
                        <div class="input-group form_login col-sm-9 col-xs-12">
                            <span class="input-group-addon">Senha</span>
                            <input type="password" name="senha" class="form-control" id="pwd">                            
                        </div><br/>
                        <div class="input-group form_login">
                            <a href="index.php">
                                <button type="submit" value="Entrar" name="Entrar" class="btn btn-default btnSaveBox" style="margin-bottom: 5px; float: right;">
                                    <span class="glyphicon glyphicon-log-in"></span> Entrar
                                </button>
                            </a>
                            <!--<input type="submit" value="Entrar" name="Entrar"/> -->
                        </div>                        
                    </form>                        
                    <a href="cadastro.php">
                        <span class="glyphicon glyphicon-user"></span> Clique aqui para se cadastrar
                    </a>
                    </br>            
                </div>    
            </div>    
        </div>
    </body>
</html>