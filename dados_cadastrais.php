<div>
<?php
    $query_update=""; 
    $query_update =$query_update."nome='$nome'";
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
    if(!empty($possui_filhos))      {$query_update =$query_update.", possui_filhos='$possui_filhos'";}
    if(!empty($genero))             {$query_update =$query_update.", genero='$genero'";}
    if(!empty($deficiencia))        {$query_update =$query_update.", deficiencia='$deficiencia'";}
    if(!empty($data_nascimento))    {$query_update =$query_update.", data_nascimento='$data_nascimento'";}
    if(!empty($email))              {$query_update =$query_update.", email='$email'";}
    if(!empty($linkedin))           {$query_update =$query_update.", linkedin='$linkedin'";}
    if(!empty($facebook))           {$query_update =$query_update.", facebook='$facebook'";}
    if(!empty($outros_sites))       {$query_update =$query_update.", outros_sites='$outros_sites'";}
    if(!empty($objetivo_prof))      {$query_update =$query_update.", objetivo_prof='$objetivo_prof'";}
    if(!empty($aceita_viajar))      {$query_update =$query_update.", aceita_viajar='$aceita_viajar'";}
    if(!empty($aceita_mudar))       {$query_update =$query_update.", aceita_mudar='$aceita_mudar'";}
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
    //echo $query_update;
?>

</div>


<div class="form-group col-sm-12 formulariobkgrd">        
    <legend>Dados Pessoais</legend>
    <div class="form-group col-sm-12">
        <label class="col-sm-5 control-label">Nome Completo:</label>
        <input class="form-control" id="nome" readonly="" name="nome" type="text" size="60" maxlength="80" value="<?php echo $nome;?>"> 			
    </div>    
    <div class="form-group col-sm-9">                                                            
        <label class="col-sm-8 control-label">Data de Nascimento:</label>
        <input class="form-control" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa" type="text" maxlength="10" autocomplete="off">  
    </div>
    <div class="form-group col-sm-3">                                                            
        <label class="col-sm-6 control-label">CPF:</label>
        <input class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" type="text" value="000.000.000-00" maxlength="14" autocomplete="off">
    </div>
    <div class="form-group col-sm-12">
        <label class="col-sm-5 control-label">Nome da Mãe:</label>
        <input class="form-control" id="nome_mae" name="nome_mae" type="text" maxlength="80" value="" placeholder="Nome Completo da Mãe"> 			
    </div>
    <div class="form-group col-sm-12">
        <label class="col-sm-5 control-label">Nome do Pai:</label>
        <input class="form-control" id="nome_pai" name="nome_pai" type="text" maxlength="80" value="" placeholder="Nome Completo do Pai"> 			
    </div>
    <div class="form-group col-sm-6">                                                            
        <label class="col-sm-6 control-label">Nacionalidade:</label>
        <div class="controls col-sm-6">
            <select class="input-xlarge" id="nacionalidade" name="nacionalidade">                    
                <option value="1" selected="selected">Brasileiro(a)</option>
                <option value="0">Outro</option>
            </select>
	</div>
    </div>
    <div class="form-group col-sm-6">                                                            
        <label class="col-sm-6 control-label">Gênero:</label>
        <div class="form-group col-sm-6">
            <label class="radio inline">
                <input class="radio_buttons optional" id="genero_masculino" name="genero" type="radio" value="1">
                masculino
            </label>
            <label class="radio inline">
                <input class="radio_buttons optional" id="genero_feminino" name="genero" type="radio" value="0">
                feminino
            </label>
        </div>
    </div>
    <div class="form-group col-sm-6">                                                            
        <label class="col-sm-6 control-label">Estado Civil:</label>
        <div class="controls col-sm-6">
            <select class="input-xlarge" id="estado_civil" name="estado_civil">                               
                <option value="1" selected="selected">Solteiro(a)</option>
                <option value="2">Casado(a)</option>
                <option value="3">Separado(a)</option>
                <option value="4">Divorciado(a)</option>
                <option value="5">Viúvo(a)</option>
            </select>
        </div>        
    </div>      
    <div class="form-group col-sm-6">                                                            
        <label class="col-sm-6 control-label">Possui Filhos:</label>
        <div class="col-sm-6 control-label">
            <label class="radio inline">
                <input class="radio_buttons optional" id="filhos_sim" name="possui_filhos" value="1" type="radio">
                Sim
            </label>
            <label class="radio inline">
                <input class="radio_buttons optional" id="filhos_nao" name="possui_filhos" value="0" type="radio">
                Não
            </label>

<?php /*echo$possui_filhos;*/?>

        </div>        
    </div>
    <div class="form-group col-sm-6">
        <label class="col-sm-6 control-label">PCD:</label>
        <div class="controls col-sm-6">
            <select class="input-xlarge" id="deficiencia" name="deficiencia" type="text">
                <option value="0" selected="selected">Nenhuma</option>
                <option value="1">Deficiencia Física</option>
                <option value="2">Deficiencia Mental</option>
                <option value="3">Deficiencia Visual</option>
                <option value="4">Deficiencia Auditiva</option>
                <option value="5">Membro Amputado</option>
                <option value="6">Outra Deficiencia</option>
            </select>
        </div>
    </div>
</div>
<div class="form-group col-sm-12 formulariobkgrd">   
    <legend>Endereço</legend>
    <div class="form-group col-sm-9">                                                           
        <label class="col-sm-2 control-label">Rua:</label>
        <input class="form-control" id="rua" name="rua" type="text" maxlength="80"> 
    </div>
    <div class="form-group col-sm-3">                                                           
        <label class="col-sm-2 control-label">Número:</label>
        <input class="form-control" id="numero" name="numero" type="text" maxlength="8"> 
    </div>
    <div class="form-group col-sm-7">
        <label class="col-sm-2 control-label">Complemento:</label>
        <input class="form-control" id="complemento" name="complemento" type="text" maxlength="60"> 
    </div>
    <div class="form-group col-sm-5">
        <label class="col-sm-2 control-label">Bairro:</label>
        <input class="form-control" id="bairro" name="bairro" type="text" maxlength="60"> 
    </div>
    <div class="form-group col-xs-6 col-sm-7"> 
        <label class="col-sm-6 col-xs-6 control-label">Cidade:</label>
        <input class="form-control" id="cidade" name="cidade" type="text" maxlength="40"> 
    </div>
    <div class="form-group col-xs-5 col-sm-5"> 
        <label class="col-sm-5 col-xs-5 control-label">CEP:</label>
        <input class="form-control" id="cep" name="cep" type="text" maxlength="10"> 
    </div>
</div><br>
<div class="form-group col-sm-12 formulariobkgrd">
    <legend>Informações de Contato</legend>
    <div class="form-group col-sm-12">                                                            
        <label class="col-sm-6 control-label">E-mail:</label>        
        <input class="form-control" id="email" name="email" type="text" maxlength="40" placeholder="seu_email@dominio.com.br" value=" "> 
    </div>
    
    <div class="form-group  col-sm-6">                                                            
        <label class="col-sm-6 control-label">Telefone:</label>        
        <input class="form-control" id="telefone" name="telefone" type="text" maxlength="12" placeholder="00 1234-5678" value=" "> 
    </div>

    <div class="form-group  col-sm-6">                                                            
        <label class="col-sm-6 control-label">Celular:</label>        
        <input class="form-control" id="celular" name="celular" type="text" maxlength="13" placeholder="00 91234-5678" value=" "> 
    </div>    
</div>
<div class="form-group col-sm-12 formulariobkgrd">
    <legend>Links e redes sociais</legend>
    <div class="form-group col-sm-12">
        <label class="col-sm-2 control-label">Linkedin:</label>
        <input class="form-control" id="linkedin" name="linkedin" type="text" maxlength="80" value=" "> 
    </div>
    <div class="form-group col-sm-12">
        <label class="col-sm-2 control-label">Facebook:</label>
        <input class="form-control" id="facebook" name="facebook" type="text" maxlength="80" value=" " placeholder="facebook.com/seu_id" title='Informe o link da sua "linha do tempo"'>
    </div>
    <div class="form-group col-sm-12">
        <label class="col-sm-2 control-label">Outros:</label>
        <input class="form-control" id="outros_sites" name="outros_sites" type="text" maxlength="80" value=" "> 
    </div>
</div>
<div class="form-group col-sm-12 formulariobkgrd">
    <legend>Objetivos</legend>
    <div class="form-group col-sm-12">
        <label class="col-sm-12 control-label">Objetivo Profissional:</label>
        <div class="form-group col-sm-12">            
            <textarea class="text required input-xlarge" style="width: 100%;" id="objetivo_prof" name="objetivo_prof" rows="5" title='Informe com clareza o cargo, nível e atividade desejada. Por exemplo, "Analista Financeiro Pleno, responsável por contas a pagar".'> <?php echo$objetivo_prof;?> </textarea>            
        </div>
    </div>
    <div class="form-group col-md-5 col-sm-6">
        <label class="col-sm-12 control-label">Áreas de interesse:</label>
        <div class="controls col-sm-12 itemformulario">
            <select class="select required setor" id="area_interesse1" name="area_interesse1">
                <?php include 'areas_interesse.php';?>
            </select>            
            
        </div>
        <div class="controls col-sm-12 itemformulario">
            <select class="select required setor" id="area_interesse2" name="area_interesse2">
                <?php include 'areas_interesse.php';?>
            </select>            
            
        </div>
        <div class="controls col-sm-12 itemformulario">
            <select class="select required setor" id="area_interesse3" name="area_interesse3">
                <?php include 'areas_interesse.php';?>
            </select>            
            
        </div>
    </div>    
    <div class="form-group col-md-7 col-sm-6">
        <label class="col-sm-9 control-label">Aceitaria viajar pela empresa:</label>
        <div class="col-sm-2 control-label">
            <label class="radio inline">
                <input class="radio_buttons" id="aceita_viajar_s" name="aceita_viajar" type="radio" value="1">
                Sim
            </label>
            <label class="radio inline">
                <input class="radio_buttons" id="aceita_viajar_n" name="aceita_viajar" type="radio" value="0">
                Não
            </label>
        </div>
    </div>
    <div class="form-group col-md-7 col-sm-6">
        <label class="col-sm-9 control-label">Aceitaria Mudar pela empresa:</label>
        <div class="col-sm-2 control-label">
            <label class="radio inline">
                <input class="radio_buttons" id="aceita_mudar_s" name="aceita_mudar" type="radio" value="1">
                Sim
            </label>
            <label class="radio inline">
                <input class="radio_buttons" id="aceita_mudar_n" name="aceita_mudar" type="radio" value="0">
                Não
            </label>
        </div>
    </div>
    <div class="form-group col-md-4 col-sm-6">
        <label class="col-sm-12 control-label">Turnos de interesse:</label>
        <div class="controls col-sm-12">
            <select class="select required setor"  id="turnos_interesse" name="turnos_interesse">               
                <option value="1" >Diurno</option>
                <option value="2" >Noturno</option>
                <option value="3" >Turnos de 8 horas</option>
                <option value="4" >Turnos de 10 horas</option>
                <option value="5" >Turnos de 12 horas</option>
                <option value="6" >Turno de X-Y</option>
                <option value="7" >Todos acima</option>
            </select>            
        </div>
    </div> 
    <div class="form-group col-md-4 col-sm-6">
        <label class="col-sm-12 control-label">Região de interesse:</label>
        <div class="controls col-sm-6">
            <select class="input-xlarge" id="regiao_distancia" name="regiao_distancia">                
                <option value="10" selected="selected">Na cidade residente</option>
                <option value="25">Cidades no raio de até 25 km</option>
                <option value="50">Cidades no raio de até 50 km</option>                
                <option value="100">Cidades no raio de até 100 km</option>
                <option value="125">Cidades no raio de até 200 km</option>
                <option value="150">Cidades no raio acima de 200 km</option>
            </select>            
        </div>
    </div>    
    <div class="form-group col-md-4 col-sm-6">
        <label class="col-sm-12 control-label">Pretensão salarial (R$):</label>
        <div class="form-group col-sm-12">         
            <input class="form-control" id="pret_salarial" name="pret_salarial" maxlength="9" placeholder="00.000,00" type="text"> 
        </div>
    </div>    
</div>
<div class="form-group col-sm-12 formulariobkgrd">   
    <legend>Resumo profissional</legend>
    <div class="form-group col-sm-12">
        <label class="col-sm-12 control-label">Resumo Profissional:</label>
        <div class="form-group col-sm-12">            
            <textarea class="text required input-xlarge" style="width: 100%;" id="resumo_profissional" name="resumo_profissional" rows="13" title='Faça um resumo de suas qualificações, habilidades e realizações profissionais.'><?php echo $resumo_profissional;?></textarea>
        </div>
    </div>
</div>
<div class="form-group col-sm-12 formulariobkgrd">   
    <legend>Formação acadêmica e complementar</legend>
    <div class="form-group col-sm-12">
        <label class="col-sm-12 control-label">Nível de Escolaridade:</label>
        <div class="controls col-sm-11">
            <select class="input-xlarge alinha-campos-inline" id="nivel_escolaridade" name="nivel_escolaridade">
                <option value="0"></option>
                <option value="5">Ensino Fundamental (1o. Grau) interrompido</option>
                <option value="7">Ensino Fundamental (1o. Grau) cursando</option>
                <option value="10">Ensino Fundamental (1o. Grau) completo</option>
                <option value="20">Ensino Médio (2o. Grau) interrompido</option>
                <option value="25">Ensino Médio (2o. Grau) cursando</option>
                <option value="27">Ensino Médio (2o. Grau) Profissionalizante cursando</option>
                <option value="30">Ensino Médio (2o. Grau) completo</option>
                <option value="40">Ensino Médio (2o. Grau) Profissionalizante completo</option>
                <option value="50">Formação superior interrompida</option>
                <option value="55">Formação superior (cursando)</option>
                <option value="60">Formação superior completa</option>
                <option value="70">Pós-graduação no nível Especialização</option>
                <option value="80">Pós-graduação no nível Mestrado</option>
                <option value="90">Pós-graduação no nível Doutorado</option>
            </select>
        </div>
    </div>
    <div class="form-group col-sm-12 formulario">
        <label class="col-sm-12 control-label">Formação:</label>
        <div class="controls col-sm-12">
            
            <div class="controls col-sm-6">
                <label class="col-sm-12 control-label">Nome do Curso:</label>
                <input class="form-control" id="gradu1_nome_curso" name="gradu1_nome_curso" type="text" size="60" maxlength="60">
            </div>
            <div class="controls col-sm-6">
                <label class="col-sm-12 control-label">Nome da Instituição:</label>
                <input class="form-control" id="gradu1_instituto" name="gradu1_instituto" type="text" size="60" maxlength="60">
            </div>
            <div class="controls col-md-6 col-sm-8 col-xs-12">
                <label class="col-sm-12 control-label">Tipo de Curso:</label>
                <select class="input-xlarge alinha-campos-inline" id="gradu1_nivel" name="gradu1_nivel">
                    <option value="0"></option>
                    <option value="5">Ensino Fundamental (1o. Grau) interrompido</option>
                    <option value="7">Ensino Fundamental (1o. Grau) cursando</option>
                    <option value="10">Ensino Fundamental (1o. Grau) completo</option>
                    <option value="20">Ensino Médio (2o. Grau) interrompido</option>
                    <option value="25">Ensino Médio (2o. Grau) cursando</option>
                    <option value="27">Ensino Médio (2o. Grau) Profissionalizante cursando</option>
                    <option value="30">Ensino Médio (2o. Grau) completo</option>
                    <option value="40">Ensino Médio (2o. Grau) Profissionalizante completo</option>
                    <option value="50">Formação superior interrompida</option>
                    <option value="55">Formação superior (cursando)</option>
                    <option value="60">Formação superior completa</option>
                    <option value="70">Pós-graduação no nível Especialização</option>
                    <option value="80">Pós-graduação no nível Mestrado</option>
                    <option value="90">Pós-graduação no nível Doutorado</option>
                </select>                
            </div>            
            <div class="controls col-md-4 col-sm-5 col-xs-12">
                <label class="col-sm-12 control-label">Mês/Ano de Conclusão:</label>                
                <select id="gradu1_forma_mes" name="gradu1_forma_mes">
                    <option value="0" selected="selected"></option>
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>
                /
                <select id="gradu1_forma_ano" name="gradu1_forma_ano">
                    <?php include 'graduacao_formacao_ano.php';?>                    
                </select>
            </div>                            
        </div>
    </div>
    <div class="form-group col-sm-12 formulario">
        <label class="col-sm-12 control-label">Formação:</label>
        <div class="controls col-sm-12">
            
            <div class="controls col-sm-6">
            <label class="col-sm-12 control-label">Nome do Curso:</label>
            <input class="form-control" id="gradu2_nome_curso" name="gradu2_nome_curso" type="text" size="60" maxlength="60">
            </div>
            <div class="controls col-sm-6">
            <label class="col-sm-12 control-label">Nome da Instituição:</label>
            <input class="form-control" id="gradu2_instituto" name="gradu2_instituto" type="text" size="60" maxlength="60">
            </div>
            <div class="controls col-md-6 col-sm-8 col-xs-12">
                <label class="col-sm-12 control-label">Tipo de Curso:</label>
                <select class="input-xlarge alinha-campos-inline" id="gradu2_nivel" name="gradu2_nivel">
                    <option value="0"></option>
                    <option value="05">Ensino Fundamental (1o. Grau) interrompido</option>
                    <option value="07">Ensino Fundamental (1o. Grau) cursando</option>
                    <option value="10">Ensino Fundamental (1o. Grau) completo</option>
                    <option value="20">Ensino Médio (2o. Grau) interrompido</option>
                    <option value="25">Ensino Médio (2o. Grau) cursando</option>
                    <option value="27">Ensino Médio (2o. Grau) Profissionalizante cursando</option>
                    <option value="30">Ensino Médio (2o. Grau) completo</option>
                    <option value="40">Ensino Médio (2o. Grau) Profissionalizante completo</option>
                    <option value="50">Formação superior interrompida</option>
                    <option value="55">Formação superior (cursando)</option>
                    <option value="60">Formação superior completa</option>
                    <option value="70">Pós-graduação no nível Especialização</option>
                    <option value="80">Pós-graduação no nível Mestrado</option>
                    <option value="90">Pós-graduação no nível Doutorado</option>
                </select>                
            </div>            
            <div class="controls col-md-4 col-sm-5 col-xs-12">
                <label class="col-sm-12 control-label">Mês/Ano de Conclusão:</label>                
                <select id="gradu2_forma_mes" name="gradu2_forma_mes">
                    <option value="0" selected="selected"></option>
                    <option value="1">Janeiro</option>
                    <option value="2">Fevereiro</option>
                    <option value="3">Março</option>
                    <option value="4">Abril</option>
                    <option value="5">Maio</option>
                    <option value="6">Junho</option>
                    <option value="7">Julho</option>
                    <option value="8">Agosto</option>
                    <option value="9">Setembro</option>
                    <option value="10">Outubro</option>
                    <option value="11">Novembro</option>
                    <option value="12">Dezembro</option>
                </select>
                /
                <select id="gradu2_forma_ano" name="gradu2_forma_ano">
                    <?php include 'graduacao_formacao_ano.php';?>                    
                </select>
            </div>                            
        </div>
    </div>
</div>
<div class="form-group col-sm-12 formulariobkgrd">   
    <legend>Idiomas</legend>    
    <div class="form-group col-sm-12 formulario">
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Idioma:</label>
            <div class="col-sm-4">
                <select id="idioma1" name="idioma1">
                    <?php include 'idiomas_form.php';?>                    
                </select>
            </div>
        </div>
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Leitura:</label>
            <div class="col-sm-4">
            <select id="idioma1_leitura" name="idioma1_leitura">                
                <option value="1" selected="selected">(não tem)</option>
                <option value="2">Básica</option>
                <option value="3">Intermediária</option>
                <option value="4">Avançada</option>
                <option value="5">Fluente</option>
            </select>
            </div>
        </div>
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Escrita:</label>
            <div class="col-sm-4">
                <select id="idioma1_escrita" name="idioma1_escrita">
                    <option value="1" selected="selected">(não tem)</option>
                    <option value="2">Básica</option>
                    <option value="3">Intermediária</option>
                    <option value="4">Avançada</option>
                    <option value="5">Fluente</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Conversação:</label>
            <div class="col-sm-4">
                <select id="idioma1_dialoga" name="idioma1_dialoga">                    
                    <option value="1" selected="selected">(não tem)</option>
                    <option value="2">Básica</option>
                    <option value="3">Intermediária</option>
                    <option value="4">Avançada</option>
                    <option value="5">Fluente</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group col-sm-12 formulario">
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Idioma:</label>
            <div class="col-sm-4">
                <select id="idioma2" name="idioma2">
                    <?php include 'idiomas_form.php';?>
                </select>
            </div>
        </div>
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Leitura:</label>
            <div class="col-sm-4">
            <select id="idioma2_leitura" name="idioma2_leitura">
                <option value=""></option>
                <option value="1" selected="selected">(não tem)</option>
                <option value="2">Básica</option>
                <option value="3">Intermediária</option>
                <option value="4">Avançada</option>
                <option value="5">Fluente</option>
            </select>
            </div>
        </div>
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Escrita:</label>
            <div class="col-sm-4">
                <select id="idioma2_escrita" name="idioma2_escrita">
                    <option value=""></option>
                    <option value="1" selected="selected">(não tem)</option>
                    <option value="2">Básica</option>
                    <option value="3">Intermediária</option>
                    <option value="4">Avançada</option>
                    <option value="5">Fluente</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 itemformulario">
            <label class="col-sm-4 control-label">Conversação:</label>
            <div class="col-sm-4">
                <select id="idioma2_dialoga" name="idioma2_dialoga">
                    <option value=""></option>
                    <option value="1" selected="selected">(não tem)</option>
                    <option value="2">Básica</option>
                    <option value="3">Intermediária</option>
                    <option value="4">Avançada</option>
                    <option value="5">Fluente</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-12 formulariobkgrd"> 
    <legend>Histórico profissional</legend>
    <div class="form-group col-sm-12 formulario">
        <label class="col-sm-12 control-label">Ultimo Emprego:</label>
        <div class="col-sm-6">                        
            <label class="col-sm-12 control-label">Ultimo Salário (R$):</label>
            <div class="form-group col-sm-12">         
                <input class="form-control" id="ult_emp_salario" name="ult_emp_salario" maxlength="9" placeholder="00.000,00" type="text"> 
            </div>                    
        </div>
        <div class="col-sm-6">
            <label class="col-sm-4 control-label">Beneficios:</label>
            <div class="col-sm-4">
                <select id="ult_emp_beneficio" name="ult_emp_beneficio" multiple="" type="text" title="Para selecionar mais de um campo, segure a tecla CRTL ao clicar no campo">
                    <option value="" selected="selected"></option>                    
                    <option value="1x">Cesta Básica</option>
                    <option value="2x">Vale refeição</option>
                    <option value="3x">Vale transporte</option>
                    <option value="4x">Seguro de Vida</option>
                    <option value="5x">Plano Dentário</option>
                    <option value="6x">Plano de Saúde</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-12 control-label">Ultima Empresa:</label>
            <div class="form-group col-sm-12">
                <input class="form-control" id="ult_emp_empresa" name="ult_emp_empresa" type="text" maxlength="40">
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-12 control-label">Ultimo Cargo:</label>
            <div class="form-group col-sm-12">
                <input class="form-control" id="ult_emp_cargo" name="ult_emp_cargo" type="text" maxlength="40">
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-8 control-label">Data de Contratação:</label>
            <div class="form-group col-sm-12">
                <input class="form-control" id="ult_emp_data_contrat" name="ult_emp_data_contrat" placeholder="dd/mm/aaaa" type="text" maxlength="10" autocomplete="off">    
            </div>
        </div>
        <div class="col-sm-6">
            <label class="col-sm-8 control-label">Data de Demissão:</label>
            <div class="form-group col-sm-12">
                <input class="form-control" id="ult_emp_data_demiss" name="ult_emp_data_demiss" placeholder="dd/mm/aaaa" type="text" maxlength="10" autocomplete="off">        
            </div>
        </div>
    </div>
</div>
<div class="form-group col-sm-12">
    
    <?php
        //echo (new \DateTime())->format('Y-m-d');
            
    ?>
    
    <div class="form-group col-xs-12"> 

        <button type="submit" value="Enviar" class="btn btn-success btnSaveBox" style="margin-bottom: 5px;">
            <span class="glyphicon glyphicon-floppy-disk"></span> Salvar
        </button>
        
        <a href="excluir.php">
            <button type="button" class="btn btn-danger btnSaveBox" style="margin-bottom: 5px; float: right;">
                <span class="glyphicon glyphicon-trash"></span> EXCLUIR CADASTRO
            </button>
        </a>
        
        <input type="hidden" name="codigo" id="codigo" class="btn btn-danger">
    </div> 
</div>   

    <?php
        /* 
                coloca os valores lidos do banco de dados nos campos do formulário 
        */       
               
        echo "<script type='text/javascript'>

            $('#nome').val('" . $nome . "');
            $('#cpf').val('" . $cpf . "');
            $('#nome_mae').val('" . $nome_mae . "');
            $('#nome_pai').val('" . $nome_pai . "');
            $('#nacionalidade').val('" . $nacionalidade . "');
            $('#estado_civil').val('" . $estado_civil . "');
            $('#deficiencia').val('" . $deficiencia . "');
            $('#data_nascimento').val('" . $data_nascimento . "');    
            $('#email').val('" . $email . "');            
            $('#linkedin').val('" . $linkedin . "');
            $('#facebook').val('" . $facebook . "');
            $('#outros_sites').val('" . $outros_sites . "');
            $('#rua').val('" . $rua . "');
            $('#numero').val('" . $numero . "');
            $('#complemento').val('" . $complemento . "');
            $('#bairro').val('" . $bairro . "');
            $('#cidade').val('" . $cidade . "');
            $('#cep').val('" . $cep . "');
            $('#codigo').val('" . $codigo ."');
            $('#telefone').val('" . $telefone . "');
            $('#celular').val('" . $celular . "');
            $('#area_interesse1').val('" . $area_interesse1 . "');
            $('#area_interesse2').val('" . $area_interesse2 . "');
            $('#area_interesse3').val('" . $area_interesse3 . "');
            $('#turnos_interesse').val('" . $turnos_interesse . "');
            $('#regiao_distancia').val('" . $regiao_distancia . "');
            $('#pret_salarial').val('" . $pret_salarial . "');
            $('#nivel_escolaridade').val('" . $nivel_escolaridade . "');
            $('#gradu1_nome_curso').val('" . $gradu1_nome_curso . "');
            $('#gradu2_nome_curso').val('" . $gradu2_nome_curso . "');
            $('#gradu1_instituto').val('" . $gradu1_instituto . "');
            $('#gradu2_instituto').val('" . $gradu2_instituto . "');
            $('#gradu1_nivel').val('" . $gradu1_nivel . "');
            $('#gradu2_nivel').val('" . $gradu2_nivel . "');
            $('#gradu1_forma_mes').val('" . $gradu1_forma_mes . "');
            $('#gradu2_forma_mes').val('" . $gradu2_forma_mes . "');
            $('#gradu1_forma_ano').val('" . $gradu1_forma_ano . "');
            $('#gradu2_forma_ano').val('" . $gradu2_forma_ano . "');
            $('#idioma1').val('" . $idioma1 . "');
            $('#idioma2').val('" . $idioma2 . "');
            $('#idioma1_leitura').val('" . $idioma1_leitura . "');
            $('#idioma2_leitura').val('" . $idioma2_leitura . "');
            $('#idioma1_escrita').val('" . $idioma1_escrita . "');
            $('#idioma2_escrita').val('" . $idioma2_escrita . "');
            $('#idioma1_dialoga').val('" . $idioma1_dialoga . "');
            $('#idioma2_dialoga').val('" . $idioma2_dialoga . "');
            $('#ult_emp_salario').val('" . $ult_emp_salario . "');            
            $('#ult_emp_empresa').val('" . $ult_emp_empresa . "');
            $('#ult_emp_cargo').val('" . $ult_emp_cargo . "');
            $('#ult_emp_data_contrat').val('" . $ult_emp_data_contrat . "');
            $('#ult_emp_data_demiss').val('" . $ult_emp_data_demiss . "');
        </script>";       
           
        /* 
                coloca os valores lidos do banco de dados nos campos do formulário em radio butons
        */

        echo
            '<script type="text/javascript">
                if ('.$possui_filhos.'){
                    $("#filhos_sim").prop("checked",true);
                }else{            
                    $("#filhos_nao").prop("checked",true);
                }
                </script>
                ';
        echo
            '<script type="text/javascript">                
                if ('.$genero.'){
                    $("#genero_masculino").prop("checked",true);
                }else{            
                    $("#genero_feminino").prop("checked",true);
                }
                </script>
                ';
        echo
            '<script type="text/javascript">                
                if ('.$aceita_viajar.'){
                    $("#aceita_viajar_s").prop("checked",true);
                }else{            
                    $("#aceita_viajar_n").prop("checked",true);
                }
                </script>
                ';
        echo
            '<script type="text/javascript">                
                if ('.$aceita_mudar.'){
                    $("#aceita_mudar_s").prop("checked",true);
                }else{            
                    $("#aceita_mudar_n").prop("checked",true);
                }
                </script>
                ';        
    ?>