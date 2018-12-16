<?php 
$nome       = $_POST['nome'];
$login      = $_POST['login'];
$senha      = $_POST['senha'];
$senha2     = $_POST['senha2'];
$email      = $_POST['email'];
$connect    = mysqli_connect('localhost','user_cv','');
$db         = mysqli_select_db($connect,'trabalheconosco');
$query_select = "SELECT usuario FROM agenda WHERE usuario = '$login'";
$select     = mysqli_query($connect,$query_select);
$array      = mysqli_fetch_array($select);
$logarray   = $array['login'];

$data_cadastro=(new \DateTime())->format('Y-m-d');
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    if($senha!==$senha2){
        echo"<script language='javascript' type='text/javascript'>alert('Senhas diferentes!');window.location.href='cadastro.php'</script>";          
    }else{
        if($senha==""){
            echo"<script language='javascript' type='text/javascript'>alert('Senhas Vazia!');window.location.href='cadastro.php'</script>";  
        }else{

            if($login == "" || $login == null){
                echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";
            }else{
                if($logarray == $login){
                    echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
                    die();
                }else{
                    $query = "INSERT INTO agenda (nome,usuario,senha,email,data_cadastro) VALUES ('$nome','$login','$senha','$email','$data_cadastro')";
                    $insert = mysqli_query($connect,$query);    
                    if($insert){
                        echo"<script language='javascript' type='text/javascript'>alert('Usuário $login cadastrado com sucesso!');window.location.href='index.php'</script>";          
                    }else{
                      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o usuário $login');window.location.href='cadastro.php'</script>";
                    }
                }
            }
        }
    }
} else {    
    echo"<script language='javascript' type='text/javascript'>alert('Digite um Email valido!');window.location.href='cadastro.php'</script>";          
}
?>