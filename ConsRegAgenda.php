<?php
/*
	cria o comando SQL de consulta na tabela agenda. Esse
	comando lê apenas o registro com a chave primária contida
	na variável $codigo
*/

$sql = "SELECT * from agenda WHERE codigo=" . $codigo;

/* 
   	executa o comando SQL inserido na variável string $sql. Coloca o 
   	resultado na variável $resultado
*/

$resultado = mysqli_query($conexao,$sql);

/*
	coloca os campos do registro lido nas variáveis PHP. O teste abaixo
	é usado para verificar se houve erro, que é tratado no else.
*/

if ( $linha = mysqli_fetch_array($resultado)) {
	  /*
		coloca em variáveis PHP o conteúdo dos campos codigo e nome da 
		linha atual
	  */
            $codigo                 = $linha["codigo"];
            $nome                   = $linha["nome"];
            $data_nascimento        = $linha["data_nascimento"];
            $cpf                    = $linha["cpf"];
            $nome_mae               = $linha["nome_mae"];
            $nome_pai               = $linha["nome_pai"];
            $nacionalidade          = $linha["nacionalidade"];
            $genero                 = $linha["genero"];
            $estado_civil           = $linha["estado_civil"];
            $possui_filhos          = $linha["possui_filhos"];
            $deficiencia            = $linha["deficiencia"];
            $rua                    = $linha["rua"];
            $numero                 = $linha["numero"];
            $complemento            = $linha["complemento"];
            $bairro                 = $linha["bairro"];
            $cidade                 = $linha["cidade"];
            $cep                    = $linha["cep"];
            $email                  = $linha["email"];
            $telefone               = $linha["telefone"];
            $celular                = $linha["celular"];
            $linkedin               = $linha["linkedin"];
            $facebook               = $linha["facebook"];
            $outros_sites           = $linha["outros_sites"];
            $objetivo_prof          = $linha["objetivo_prof"];
            $area_interesse1        = $linha["area_interesse1"];
            $area_interesse2        = $linha["area_interesse2"];
            $area_interesse3        = $linha["area_interesse3"];
            $aceita_viajar          = $linha["aceita_viajar"];
            $aceita_mudar           = $linha["aceita_mudar"];
            $turnos_interesse       = $linha["turnos_interesse"];
            $regiao_distancia       = $linha["regiao_distancia"];
            $pret_salarial          = $linha["pret_salarial"];
            $resumo_profissional    = $linha["resumo_profissional"];
            $nivel_escolaridade     = $linha["nivel_escolaridade"];
            $gradu1_nome_curso      = $linha["gradu1_nome_curso"];
            $gradu2_nome_curso      = $linha["gradu2_nome_curso"];
            $gradu1_instituto       = $linha["gradu1_instituto"];
            $gradu2_instituto       = $linha["gradu2_instituto"];
            $gradu1_nivel           = $linha["gradu1_nivel"];
            $gradu2_nivel           = $linha["gradu2_nivel"];
            $gradu1_forma_mes       = $linha["gradu1_forma_mes"];
            $gradu2_forma_mes       = $linha["gradu2_forma_mes"];
            $gradu1_forma_ano       = $linha["gradu1_forma_ano"];
            $gradu2_forma_ano       = $linha["gradu2_forma_ano"];
            $idioma1                = $linha["idioma1"];
            $idioma2                = $linha["idioma2"];
            $idioma1_leitura        = $linha["idioma1_leitura"];
            $idioma2_leitura        = $linha["idioma2_leitura"];
            $idioma1_escrita        = $linha["idioma1_escrita"];
            $idioma2_escrita        = $linha["idioma2_escrita"];
            $idioma1_dialoga        = $linha["idioma1_dialoga"];
            $idioma2_dialoga        = $linha["idioma2_dialoga"];
            $ult_emp_salario        = $linha["ult_emp_salario"];
            $ult_emp_beneficio      = $linha["ult_emp_beneficio"];
            $ult_emp_empresa        = $linha["ult_emp_empresa"];
            $ult_emp_cargo          = $linha["ult_emp_cargo"];
            $ult_emp_data_contrat   = $linha["ult_emp_data_contrat"];
            $ult_emp_data_demiss    = $linha["ult_emp_data_demiss"];


	  /*
  		coloca ponto e traço em $cep e cpf
	  */

	  $cep = $cep[0] . $cep[1] . "." . $cep[2] . $cep[3] . $cep[4] . "-" . $cep[5] . $cep[6] . $cep[7]; 
      $cpf = $cpf[0] . $cpf[1] . $cpf[2] . "." . $cpf[3] . $cpf[4] . $cpf[5] . "." . $cpf[6] . $cpf[7] . $cpf[8] . "-" . $cpf[9] . $cpf[10];
      $telefone = $telefone[0] . $telefone[1] . " " . $telefone[2] . $telefone[3] . $telefone[4] . $telefone[5] . "-" . $telefone[6] . $telefone[7] . $telefone[8] . $telefone[9];
      $celular = $celular[0] . $celular[1] . " " . $celular[2] . $celular[3] . $celular[4] . $celular[5] . $celular[6] . "-" . $celular[7] . $celular[8] . $celular[9] . $celular[10];
      $data_nascimento = $data_nascimento[8] . $data_nascimento[9] . $data_nascimento[7] . $data_nascimento[5] . $data_nascimento[6] . $data_nascimento[4] . $data_nascimento[0] . $data_nascimento[1] . $data_nascimento[2] . $data_nascimento[3];
      $pret_salarial = $pret_salarial[0] . $pret_salarial[1] . "." . $pret_salarial[2] . $pret_salarial[3] . $pret_salarial[4] . "," . $pret_salarial[5] . $pret_salarial[6];
      $ult_emp_salario = $ult_emp_salario[0] . $ult_emp_salario[1] . "." . $ult_emp_salario[2] . $ult_emp_salario[3] . $ult_emp_salario[4] . "," . $ult_emp_salario[5] . $ult_emp_salario[6];
      $ult_emp_data_contrat = $ult_emp_data_contrat[8] . $ult_emp_data_contrat[9] . $ult_emp_data_contrat[7] . $ult_emp_data_contrat[5] . $ult_emp_data_contrat[6] . $ult_emp_data_contrat[4] . $ult_emp_data_contrat[0] . $ult_emp_data_contrat[1] . $ult_emp_data_contrat[2] . $ult_emp_data_contrat[3];
      $ult_emp_data_demiss = $ult_emp_data_demiss[8] . $ult_emp_data_demiss[9] . $ult_emp_data_demiss[7] . $ult_emp_data_demiss[5] . $ult_emp_data_demiss[6] . $ult_emp_data_demiss[4] . $ult_emp_data_demiss[0] . $ult_emp_data_demiss[1] . $ult_emp_data_demiss[2] . $ult_emp_data_demiss[3];
}
else
     echo "<h2>Erro na consulta</h2>";	  	     
?>
