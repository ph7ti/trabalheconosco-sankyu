jQuery.fn.janelaPopUp = function(){
	/*
		Plugin jQuery para exibir janela PopUp centralizada
		na tela. Necessário criar uma div com id="mascara", para cobrir
		a tela e evitar acesso ao formulário com a janela exibida.

		Sintaxe: $("#nomedadiv").janelaPopUp();

		OBS: o seletor usado deve conter um botão com classe .btnOK, um link 
		     com classe .fechar e uma div com classe .tituloJanela (ver popUp.css)
	*/
   // colocando o fundo preto (div id=mascara) com 60% de transparência
   $('#mascara').css({'width':$(window).width(),'height':$(document).height()});  
   $('#mascara').fadeTo("slow",0.6);
   /*
		$(window).width() - largura da janela do navegador
		$(this).width() - largura da div ou tag HTML que será exibida
		$(window).scrollLeft() - se existir barra de rolagem horizontal, acrescentar
			a distância de rolagem (em pixels) para centralizar corretamente a janela
   */
   var esquerda = ( ( $(window).width() - $(this).width() ) / 2 ) + $(window).scrollLeft();
   /*
		$(window).height() - altura da janela do navegador
		$(this).width() - altura da div ou tag HTML que será exibida
		$(window).scrollTop() - se existir barra de rolagem vertical, acrescentar
			a distância de rolagem (em pixels) para centralizar corretamente a janela.
			Corrige o erro da versão anterior.
   */
   var topo     = ( ( $(window).height() -  $(this).height() ) / 2 ) + $(window).scrollTop();
   /*
		Posiciona e exibe a janela centralziada e 
   */
   $(this).css({'top':topo,'left':esquerda});
   $(this).show(); 

   return this;
} 

