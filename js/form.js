/*
   biblioteca de usu�rio usada para validar os campos do formul�rio quando ele for enviado (evento submit)
*/

function validarDados(formulario){
/* Esta função recebe como parâmetro TODO o formul�rio. Ela é acionada pelo método submit
   da tag <form>
   
   A função testa os campos na ordem em que aparecem na tela. Para cada campo, em caso de 
   erro, os seguintes passos devem ser executados:
   1- Exibir mensagem de erro
   2- Colocar o cursor no campo com erro
   3- Cancelar o envio do formul�rio

   ATEN��O: Essa biblioteca só funciona associada ao plug-in jQuery MaskedInput, ao
            plug-in cpf-validate.1.0 e ao plugin .janelaPopUp inclu�do no arquivo popup.js

   TABELA DE CARACTERES ESPECIAIS EM UTF-8 PARA JAVASCRIPT

á = \u00e1 à = \u00e0 â = \u00e2 ã = \u00e3 Á = \u00c1 À = \u00c0 Â = \u00c2 Ã = \u00c3
é = \u00e9 è = \u00e8 ê = \u00ea            É = \u00c9 È = \u00c8 Ê = \u00ca
í = \u00ed ì = \u00ec î = \u00ee            Í = \u00cd Ì = \u00cc Î = \u00ce
ó = \u00f3 ò = \u00f2 ô = \u00f4 õ = \u00f5 Ó = \u00d3 Ò = \u00d2 Ô = \u00d4 Õ = \u00d5
ú = \u00fa ù = \u00f9 û = \u00fb            Ú = \u00da Ù = \u00d9
ç = \u00e7 Ç = \u00c7            ñ = \u00f1 & = \u0026 ' = \u0027            Ñ =\u00d1
*/

var tituloErro = "Erro de Digita\u00e7\u00e3o";

   /*
   
   
if ( $("#nome").val().trim().length == 0 ){

   // exibe mensagem de erro na div com id="Erro"
   
   $("#mensagemTexto").text("O campo nome n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo
   // que est� ativo (onde o cursor est�)
   inputAtivo = "#nome";

   // cancela o envio do formulario
   return false;
   }

if ( $("#rua").val().trim().length == 0 ){

   $("#mensagemTexto").text("O campo rua n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
   inputAtivo = "#rua";

   // cancela o envio do formulario
   return false;
   }

if ( $("#numero").val().trim().length == 0 ){
   $("#mensagemTexto").text("O campo n\u00famero n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
   inputAtivo = "#numero";

   // cancela o envio do formulario
   return false;
   }
/*
if ( $("#complemento").val().trim().length == 0 ){
   $("#mensagemTexto").text("O campo complemento n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
   inputAtivo = "#complemento";

   // cancela o envio do formulario
   return false;
   }
*/
   
   /*
   
   
if ( $("#bairro").val().trim().length == 0 ){
   $("#mensagemTexto").text("O campo bairro n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
   inputAtivo = "#bairro";

   // cancela o envio do formulario
   return false;
   }

if ( $("#cidade").val().trim().length == 0 ){
   $("#mensagemTexto").text("O campo cidade n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
   inputAtivo = "#cidade";

   // cancela o envio do formulario
   return false;
   }
 
if ( $("#cep").val().trim().length == 0 ){
   $("#mensagemTexto").text("CEP inv\u00e1lido!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na vari�vel global inputAtivo o id do campo que est� ativo (onde o cursor est�)
   inputAtivo = "#cep";

   // cancela o envio do formulario
   return false;
   }

/* 
if ( $("#variavel").val().trim().length == 0 ){
   $("#mensagemTexto").text("O campo variavel n\u00e3o pode ficar em branco!");
   $(".tituloJanela h3").text(tituloErro);
   $("#janelaMsg").janelaPopUp();
   
   // guardar na variável global inputAtivo o id do campo que está ativo (onde o cursor está)
   inputAtivo = "#variavel";

   // cancela o envio do formulario
   return false;
   }
*/





   /* Se nenhum erro ocorreu, retorna verdadeiro */
   return true;
}
/*===============================================================*/