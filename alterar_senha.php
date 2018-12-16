<?php 
$usuario = $_POST['login'];
$email = $_POST['email'];
$senha  = $_POST['senha'];
$senha2  = $_POST['senha2'];
$connect = mysqli_connect('localhost','user_cv','');
$db = mysqli_select_db($connect,'trabalheconosco');
$sql = "SELECT codigo,senha FROM agenda WHERE usuario = '$usuario'";
$select = mysqli_query($connect,$sql);
$array = mysqli_fetch_array($select);
$codigo = $array['codigo'];
$senha_old = $array['senha'];
$data_atualizacao=(new \DateTime())->format('Y-m-d');

$query = "UPDATE agenda SET senha='$senha', email='$email', data_atualizacao='$data_atualizacao' WHERE codigo='$codigo'";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    if($senha!==$senha2){
        echo"<script language='javascript' type='text/javascript'>alert('Senhas diferentes!');window.location.href='senha.php'</script>";          
    }else{
        if($senha_old==$senha){
            echo"<script language='javascript' type='text/javascript'>alert('Senha ja cadastrada!');window.location.href='senha.php'</script>";
        }else{
            if($senha==""){
                echo"<script language='javascript' type='text/javascript'>alert('Digite uma senha!');window.location.href='senha.php'</script>";  
            }else{
                $update_ = mysqli_query($connect,$query); 
                if($update_){
                    echo"<script language='javascript' type='text/javascript'>alert('Senha alterada com sucesso! Faça Login novamente.');window.location.href='logout.php'</script>";          
                }else{
                  echo"<script language='javascript' type='text/javascript'>alert('Não foi possível alterar a senha');window.location.href='senha.php'</script>";
                }
            }
        }
    }
} else {    
    echo"<script language='javascript' type='text/javascript'>alert('Digite um Email valido!');window.location.href='senha.php'</script>";          
}

?>