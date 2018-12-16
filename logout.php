<?php
/*
setcookie("login","",time()-3600);
setcookie("senha","",time()-3600);
?>

<button onclick="window.location.href='index.php'" class="btn btn-success navbar-btn navbar-right hidden-sm hidden-xs" type="button" data-toggle="modal" data-target="#logout">Voltar</button>
<?php
*/
include("seguranca.php");
expulsaVisitante();

?>