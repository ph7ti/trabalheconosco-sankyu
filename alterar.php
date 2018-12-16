<html lang="pt-br">
<head>
	<title>Alterar Registros</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

	/*
		cria variáveis PHP com o conteúdo dos campos do formulário de alteração
	*/
    
    unset($query_update);
    
     $data_atualizacao=(new \DateTime())->format('Y-m-d');
    
     $codigo = $_POST['codigo'];
     $nome = $_POST['nome'];
     if(!empty($_POST['data_nascimento']))			{
         $data_nascimento = $_POST['data_nascimento'];
         $data_nascimento = str_replace("/", "-", $data_nascimento);
         $data_nascimento = $data_nascimento[6] . $data_nascimento[7] . $data_nascimento[8] . $data_nascimento[9] . $data_nascimento[5] . $data_nascimento[3] . $data_nascimento[4] . $data_nascimento[2] . $data_nascimento[0] . $data_nascimento[1];
     }
     if(!empty($_POST['cpf']))                      {
         $cpf = $_POST['cpf'];
         $cpf = str_replace("-", "", $cpf);
         $cpf = str_replace(".", "", $cpf);
     }
     if(!empty($_POST['nome_mae']))					{$nome_mae = $_POST['nome_mae'];}
     if(!empty($_POST['nome_pai']))					{$nome_pai = $_POST['nome_pai'];}
     if(!empty($_POST['nacionalidade']))			{$nacionalidade = $_POST['nacionalidade'];}
     if(!empty($_POST['genero']))					{$genero = $_POST['genero'];}
     if(!empty($_POST['estado_civil']))				{$estado_civil = $_POST['estado_civil'];}
     if($_POST['possui_filhos']==0)			        {
         $possui_filhos = 0;
     }else{
         $possui_filhos = 1;
     }         
     if(!empty($_POST['deficiencia']))				{$deficiencia = $_POST['deficiencia'];}
     if(!empty($_POST['rua']))					    {$rua = $_POST['rua'];}
     if(!empty($_POST['numero']))					{$numero = $_POST['numero'];}
     if(!empty($_POST['complemento']))				{$complemento = $_POST['complemento'];}
     if(!empty($_POST['bairro']))					{$bairro = $_POST['bairro'];}
     if(!empty($_POST['cidade']))					{$cidade = $_POST['cidade'];}
     if(!empty($_POST['cep']))					    {
         $cep = $_POST['cep'];
         $cep = str_replace("-", "", $cep);
         $cep = str_replace(".", "", $cep);
     }
     if(!empty($_POST['email']))					{$email = $_POST['email'];}
     if(!empty($_POST['telefone']))					{
         $telefone = $_POST['telefone'];
         $telefone = str_replace("-", "", $telefone);
         $telefone = str_replace(" ", "", $telefone);
     }
     if(!empty($_POST['celular']))					{
         $celular = $_POST['celular'];
         $celular = str_replace("-", "", $celular);
         $celular = str_replace(" ", "", $celular);
     }
     if(!empty($_POST['linkedin']))					{$linkedin = $_POST['linkedin'];}
     if(!empty($_POST['facebook']))					{$facebook = $_POST['facebook'];}
     if(!empty($_POST['outros_sites']))				{$outros_sites = $_POST['outros_sites'];}
     if(!empty($_POST['objetivo_prof']))			{$objetivo_prof = $_POST['objetivo_prof'];}
     if(!empty($_POST['area_interesse1']))			{$area_interesse1 = $_POST['area_interesse1'];}
     if(!empty($_POST['area_interesse2']))			{$area_interesse2 = $_POST['area_interesse2'];}
     if(!empty($_POST['area_interesse3']))			{$area_interesse3 = $_POST['area_interesse3'];}     
     if($_POST['aceita_viajar']==0)			        {
         $aceita_viajar = 0;
     }else{
         $aceita_viajar = 1;
     }         
     if($_POST['aceita_mudar']==0)			        {
         $aceita_mudar = 0;
     }else{
         $aceita_mudar = 1;
     }
     if(!empty($_POST['turnos_interesse']))			{$turnos_interesse = $_POST['turnos_interesse'];}
     if(!empty($_POST['regiao_distancia']))			{$regiao_distancia = $_POST['regiao_distancia'];}
     if(!empty($_POST['pret_salarial']))			{
         $pret_salarial = $_POST['pret_salarial'];
         $pret_salarial = str_replace(",", "", $pret_salarial);
         $pret_salarial = str_replace(".", "", $pret_salarial);
     }
     if(!empty($_POST['resumo_profissional']))		{$resumo_profissional = $_POST['resumo_profissional'];}
     if(!empty($_POST['nivel_escolaridade']))		{$nivel_escolaridade = $_POST['nivel_escolaridade'];}
     if(!empty($_POST['gradu1_nome_curso']))		{$gradu1_nome_curso = $_POST['gradu1_nome_curso'];}
     if(!empty($_POST['gradu2_nome_curso']))		{$gradu2_nome_curso = $_POST['gradu2_nome_curso'];}
     if(!empty($_POST['gradu1_instituto']))			{$gradu1_instituto = $_POST['gradu1_instituto'];}
     if(!empty($_POST['gradu2_instituto']))			{$gradu2_instituto = $_POST['gradu2_instituto'];}
     if(!empty($_POST['gradu1_nivel']))				{$gradu1_nivel = $_POST['gradu1_nivel'];}
     if(!empty($_POST['gradu2_nivel']))				{$gradu2_nivel = $_POST['gradu2_nivel'];}
     if(!empty($_POST['gradu1_forma_mes']))			{$gradu1_forma_mes = $_POST['gradu1_forma_mes'];}
     if(!empty($_POST['gradu2_forma_mes']))			{$gradu2_forma_mes = $_POST['gradu2_forma_mes'];}
     if(!empty($_POST['gradu1_forma_ano']))			{$gradu1_forma_ano = $_POST['gradu1_forma_ano'];}
     if(!empty($_POST['gradu2_forma_ano']))			{$gradu2_forma_ano = $_POST['gradu2_forma_ano'];}
     if(!empty($_POST['idioma1']))					{$idioma1 = $_POST['idioma1'];}
     if(!empty($_POST['idioma2']))					{$idioma2 = $_POST['idioma2'];}
     if(!empty($_POST['idioma1_leitura']))			{$idioma1_leitura = $_POST['idioma1_leitura'];}
     if(!empty($_POST['idioma2_leitura']))			{$idioma2_leitura = $_POST['idioma2_leitura'];}
     if(!empty($_POST['idioma1_escrita']))			{$idioma1_escrita = $_POST['idioma1_escrita'];}
     if(!empty($_POST['idioma2_escrita']))			{$idioma2_escrita = $_POST['idioma2_escrita'];}
     if(!empty($_POST['idioma1_dialoga']))			{$idioma1_dialoga = $_POST['idioma1_dialoga'];}
     if(!empty($_POST['idioma2_dialoga']))			{$idioma2_dialoga = $_POST['idioma2_dialoga'];}
     if(!empty($_POST['ult_emp_salario']))			{
         $ult_emp_salario = $_POST['ult_emp_salario'];
         $ult_emp_salario = str_replace(",", "", $ult_emp_salario);
         $ult_emp_salario = str_replace(".", "", $ult_emp_salario);
     }
     if(!empty($_POST['ult_emp_beneficio']))		{$ult_emp_beneficio = $_POST['ult_emp_beneficio'];}
     if(!empty($_POST['ult_emp_empresa']))			{$ult_emp_empresa = $_POST['ult_emp_empresa'];}
     if(!empty($_POST['ult_emp_cargo']))			{$ult_emp_cargo = $_POST['ult_emp_cargo'];}
     if(!empty($_POST['ult_emp_data_contrat']))		{
         $ult_emp_data_contrat = $_POST['ult_emp_data_contrat'];
         $ult_emp_data_contrat = $ult_emp_data_contrat[6] . $ult_emp_data_contrat[7] . $ult_emp_data_contrat[8] . $ult_emp_data_contrat[9] . $ult_emp_data_contrat[5] . $ult_emp_data_contrat[3] . $ult_emp_data_contrat[4] . $ult_emp_data_contrat[2] . $ult_emp_data_contrat[0] . $ult_emp_data_contrat[1];
     }
     if(!empty($_POST['ult_emp_data_demiss']))		{
         $ult_emp_data_demiss = $_POST['ult_emp_data_demiss'];
         $ult_emp_data_demiss = $ult_emp_data_demiss[6] . $ult_emp_data_demiss[7] . $ult_emp_data_demiss[8] . $ult_emp_data_demiss[9] . $ult_emp_data_demiss[5] . $ult_emp_data_demiss[3] . $ult_emp_data_demiss[4] . $ult_emp_data_demiss[2] . $ult_emp_data_demiss[0] . $ult_emp_data_demiss[1];
     }


	$query_update="";
    $query_update=$query_update."nome='$nome'";
    if(!empty($data_atualizacao))   {$query_update =$query_update.", data_atualizacao='$data_atualizacao'";}
    if(!empty($cpf))                {$query_update =$query_update.", cpf='$cpf'";}
    if(!empty($nome_mae))           {$query_update =$query_update.", nome_mae='$nome_mae'";}
    if(!empty($nome_pai))           {$query_update =$query_update.", nome_pai='$nome_pai'";}
    if(!empty($nacionalidade))      {$query_update =$query_update.", nacionalidade='$nacionalidade'";}
    if(!empty($rua))                {$query_update =$query_update.", rua='$rua'";}
    if(!empty($numero))             {$query_update =$query_update.", numero='$numero'";}
    if(!empty($complemento))        {$query_update =$query_update.", complemento='$complemento'";}
    if(!empty($bairro))             {$query_update =$query_update.", bairro='$bairro'";}
    if(!empty($cidade))             {$query_update =$query_update.", cidade='$cidade'";}
    if(!empty($cep))                {$query_update =$query_update.", cep='$cep'";}
    if(!empty($telefone))           {$query_update =$query_update.", telefone='$telefone'";}
    if(!empty($celular))            {$query_update =$query_update.", celular='$celular'";}
    if(!empty($estado_civil))       {$query_update =$query_update.", estado_civil='$estado_civil'";}
    if($possui_filhos==0)           {$query_update =$query_update.", possui_filhos=0";}else{$query_update =$query_update.", possui_filhos=1";}
    if($genero==0)                  {$query_update =$query_update.", genero=0";}else{$query_update =$query_update.", genero=1";}
    if(!empty($deficiencia))        {$query_update =$query_update.", deficiencia='$deficiencia'";}
    if(!empty($data_nascimento))    {$query_update =$query_update.", data_nascimento='$data_nascimento'";}
    if(!empty($email))              {$query_update =$query_update.", email='$email'";}
    if(!empty($linkedin))           {$query_update =$query_update.", linkedin='$linkedin'";}
    if(!empty($facebook))           {$query_update =$query_update.", facebook='$facebook'";}
    if(!empty($outros_sites))       {$query_update =$query_update.", outros_sites='$outros_sites'";}
    if(!empty($objetivo_prof))      {$query_update =$query_update.", objetivo_prof='$objetivo_prof'";}
    if($aceita_viajar==0)           {$query_update =$query_update.", aceita_viajar=0";}else{$query_update =$query_update.", aceita_viajar=1";}
    if($aceita_mudar==0)            {$query_update =$query_update.", aceita_mudar=0";}else{$query_update =$query_update.", aceita_mudar=1";}
    if(!empty($turnos_interesse))   {$query_update =$query_update.", turnos_interesse='$turnos_interesse'";}
    if(!empty($regiao_distancia))   {$query_update =$query_update.", regiao_distancia='$regiao_distancia'";}
    if(!empty($pret_salarial))      {$query_update =$query_update.", pret_salarial='$pret_salarial'";}
    if(!empty($resumo_profissional)){$query_update =$query_update.", resumo_profissional='$resumo_profissional'";}
    if(!empty($nivel_escolaridade)) {$query_update =$query_update.", nivel_escolaridade='$nivel_escolaridade'";}
    if(!empty($gradu1_nome_curso))  {$query_update =$query_update.", gradu1_nome_curso='$gradu1_nome_curso'";}
    if(!empty($gradu2_nome_curso))  {$query_update =$query_update.", gradu2_nome_curso='$gradu2_nome_curso'";}
    if(!empty($gradu1_instituto))   {$query_update =$query_update.", gradu1_instituto='$gradu1_instituto'";}
    if(!empty($gradu2_instituto))   {$query_update =$query_update.", gradu2_instituto='$gradu2_instituto'";}
    if(!empty($gradu1_nivel))       {$query_update =$query_update.", gradu1_nivel='$gradu1_nivel'";}
    if(!empty($gradu2_nivel))       {$query_update =$query_update.", gradu2_nivel='$gradu2_nivel'";}
    if(!empty($area_interesse1))    {$query_update =$query_update.", area_interesse1='$area_interesse1'";}
    if(!empty($area_interesse2))    {$query_update =$query_update.", area_interesse2='$area_interesse2'";}
    if(!empty($area_interesse3))    {$query_update =$query_update.", area_interesse3='$area_interesse3'";}
    if(!empty($gradu1_forma_mes))   {$query_update =$query_update.", gradu1_forma_mes='$gradu1_forma_mes'";}
    if(!empty($gradu2_forma_mes))   {$query_update =$query_update.", gradu2_forma_mes='$gradu2_forma_mes'";}
    if(!empty($gradu1_forma_ano))   {$query_update =$query_update.", gradu1_forma_ano='$gradu1_forma_ano'";}
    if(!empty($gradu2_forma_ano))   {$query_update =$query_update.", gradu2_forma_ano='$gradu2_forma_ano'";}
    if(!empty($idioma1))            {$query_update =$query_update.", idioma1='$idioma1'";}
    if(!empty($idioma2))            {$query_update =$query_update.", idioma2='$idioma2'";}
    if(!empty($idioma1_leitura))    {$query_update =$query_update.", idioma1_leitura='$idioma1_leitura'";}
    if(!empty($idioma2_leitura))    {$query_update =$query_update.", idioma2_leitura='$idioma2_leitura'";}
    if(!empty($idioma1_escrita))    {$query_update =$query_update.", idioma1_escrita='$idioma1_escrita'";}
    if(!empty($idioma2_escrita))    {$query_update =$query_update.", idioma2_escrita='$idioma2_escrita'";}
    if(!empty($idioma1_dialoga))    {$query_update =$query_update.", idioma1_dialoga='$idioma1_dialoga'";}
    if(!empty($idioma2_dialoga))    {$query_update =$query_update.", idioma2_dialoga='$idioma2_dialoga'";}
    if(!empty($ult_emp_salario))    {$query_update =$query_update.", ult_emp_salario='$ult_emp_salario'";}
    if(!empty($ult_emp_empresa))    {$query_update =$query_update.", ult_emp_empresa='$ult_emp_empresa'";}
    if(!empty($ult_emp_cargo))      {$query_update =$query_update.", ult_emp_cargo='$ult_emp_cargo'";}
    if(!empty($ult_emp_data_contrat)){$query_update =$query_update.", ult_emp_data_contrat='$ult_emp_data_contrat'";}
    if(!empty($ult_emp_data_demiss)){$query_update =$query_update.", ult_emp_data_demiss='$ult_emp_data_demiss'";}
        
    include "conexao.php";
    if(!empty($query_update)){
        $sql ="update agenda set ".$query_update." where codigo=".$codigo;
        $resultado = mysqli_query($conexao,$sql);
    }
	/*	
    testar para verificar se houve erro de inclusão
	*/

	if (!$resultado){
		echo "<br/>Erro:" . mysqli_connect_error();
        }
	else{
                //echo"<br/>";
		echo("<br/>Alteração de $nome realizada com sucesso!");
        }
   ?>
</body>
