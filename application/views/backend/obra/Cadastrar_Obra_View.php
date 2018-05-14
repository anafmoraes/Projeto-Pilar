<div class="contact tabsregistro">
    <div class="container">
        <?php echo form_open('pre_visualizacao_obra'); ?>
            <button class="btn btn-default" type="submit" > Voltar </button>
        <?php echo form_close();?>

        <div class="text-center">
            <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                <h1><?php echo $info ?></h1>                  
            </div>
        </div>
    </div>
</div>

<?php if(isset($error)):?>
    <div><?=$error?></div>
<?php endif;?>

<div class="container">
<?php
echo validation_errors('<div class="alert alert-danger">','</div>');
echo form_open('Obra_Controller/salvar_obra', 'id="regForm"');
?>

  <!-- One "tab" for each step in the form: -->
    <div class="tab">Localização
        <h1>Localização</h1>
        <h6 class="text-center">Insira abaixo as informações da <strong> LOCALIZAÇÃO </strong> do objeto que deseja registrar</h6>
        <div class="form-group">
            <!--label id="localizacao">Localização</label-->
            <input type="text" id="localizacao" name="localizacao" oninput="this.className = ''" class="form-control" placeholder="Digite a localização do objeto" value="<?php echo set_value('localizacao');?>">
        </div>
    </div>

    <div class="tab">Identificação do bem:
        <h1>Identificação do bem</h1>
        <h6 class="text-center">Insira abaixo as informações da <strong> IDENTIFICAÇÃO </strong> do objeto que deseja registrar</h6>
        <div class="form-group">
            <label id="numero-atual">Número atual</label>
            <input type="text" id="numero-atual" name="numero-atual" class="form-control" placeholder="Digite o número atual" value="<?php echo set_value('numero-atual');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="numero-anterior">Número anterior</label>
            <input type="text" id="numero-anterior" name="numero-anterior" class="form-control" placeholder="Digite o número anterior" value="<?php echo set_value('numero-anterior');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="fichas-relacionadas">Fichas relacionadas</label>
            <input type="text" id="fichas-relacionadas" name="fichas-relacionadas" class="form-control" placeholder="Digite as fichas relacionadas" value="<?php echo set_value('fichas-relacionadas');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="nome-objeto">Nome do objeto</label>
            <input type="text" id="nome-objeto" name="nome-objeto" class="form-control" placeholder="Digite o nome do objeto" value="<?php echo set_value('nome-objeto');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Digite o título" value="<?php echo set_value('titulo');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="classe">Classe</label>
            <input type="text" id="classe" name="classe" class="form-control" placeholder="Digite a classe do objeto" value="<?php echo set_value('classe');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="sub-classe">Sub-classe</label>
            <input type="text" id="sub-classe" name="sub-classe" class="form-control" placeholder="Digite a sub-classe do objeto" value="<?php echo set_value('sub-classe');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="material">Material</label>
            <input type="text" id="material" name="material" class="form-control" placeholder="Digite o material do objeto" value="<?php echo set_value('material');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="tecnica">Técnica</label>
            <input type="text" id="tecnica" name="tecnica" class="form-control" placeholder="Digite a técnica" value="<?php echo set_value('tecnica');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="inscricoes-marcas">Inscrições/marcas</label>
            <input type="text" id="inscricoes-marcas" name="inscricoes-marcas" class="form-control" placeholder="Digite as inscrições ou marcas" value="<?php echo set_value('inscricoes-marcas');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="epoca">Época</label>
            <input type="text" id="epoca" name="epoca" class="form-control" placeholder="Digite a época" value="<?php echo set_value('epoca');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="autoria">Autoria</label>
            <input type="text" id="autoria" name="autoria" class="form-control" placeholder="Digite o autor" value="<?php echo set_value('autoria');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="origem">Origem</label>
            <input type="text" id="origem" name="origem" class="form-control" placeholder="Digite a origem do objeto" value="<?php echo set_value('origem');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="procedencia">Procedência</label>
            <input type="text" id="procedencia" name="procedencia" class="form-control" placeholder="Digite a procedência do objeto" value="<?php echo set_value('procedencia');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="conservacao">Conservação</label>
            <input type="text" id="conservacao" name="conservacao" class="form-control" placeholder="Digite o estado de conservação do objeto" value="<?php echo set_value('conservacao');?>" oninput="this.className = ''">
        </div>
    </div>

    <div class="tab">Dimensões:
        <h1>Dimensões</h1>
        <h6 class="text-center">Insira abaixo as informações das <strong> DIMENSÕES </strong> do objeto que deseja registrar</h6>
        <div class="form-group">
            <label id="altura">Altura</label>
            <input type="text" id="altura" name="altura" class="form-control" placeholder="Digite a altura do objeto" value="<?php echo set_value('altura');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="largura">Largura</label>
            <input type="text" id="largura" name="largura" class="form-control" placeholder="Digite a largura do objeto" value="<?php echo set_value('largura');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="comprimento">Comprimento</label>
            <input type="text" id="comprimento" name="comprimento" class="form-control" placeholder="Digite o comprimento do objeto" value="<?php echo set_value('comprimento');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="profundidade">Profundidade</label>
            <input type="text" id="profundidade" name="profundidade" class="form-control" placeholder="Digite a profundidade do objeto" value="<?php echo set_value('profundidade');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="diametro">Diâmetro</label>
            <input type="text" id="diametro" name="diametro" class="form-control" placeholder="Digite o diâmetro do objeto" value="<?php echo set_value('diametro');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="peso">Peso</label>
            <input type="text" id="peso" name="peso" class="form-control" placeholder="Digite o peso do objeto" value="<?php echo set_value('peso');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="circunferencia">Circunferência</label>
            <input type="text" id="circunferencia" name="circunferencia" class="form-control" placeholder="Digite a circunferência do objeto" value="<?php echo set_value('circunferencia');?>" oninput="this.className = ''">
        </div>
    </div>

    <div class="tab">Análise do objeto:
        <h1>Análise do objeto</h1>
        <h6 class="text-center">Insira abaixo as informações da <strong> ANÁLISE </strong> do objeto que deseja registrar</h6>
        <div class="form-group">
            <label id="descricao-objeto">Descrição do objeto </label>
            <input type="text" id="descricao-objeto" name="descricao-objeto" class="form-control" placeholder="Insira uma descrição para o objeto" value="<?php echo set_value('descricao-objeto');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="carac-tecnicas">Caracteristicas técnicas </label>
            <input type="text" id="carac-tecnicas" name="carac-tecnicas" class="form-control" placeholder="Insira as características técnicas" value="<?php echo set_value('carac-tecnicas');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="carac-inconografica">Caracteristicas inconográficas </label>
            <input type="text" id="carac-inconografica" name="carac-inconografica" class="form-control" placeholder="Insira as características inconográficas" value="<?php echo set_value('carac-inconografica');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="carac-estilisticas">Caracteristicas estilísticas </label>
            <input type="text" id="carac-estilisticas" name="carac-estilisticas" class="form-control" placeholder="Insira as características estilísticas" value="<?php echo set_value('carac-estilisticas');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="dados-historicos">Dados históricos </label>
            <input type="text" id="dados-historicos" name="dados-historicos" class="form-control" placeholder="Insira os dados históricos" value="<?php echo set_value('dados-historicos');?>" oninput="this.className = ''">
        </div>
    </div>

    <div class="tab">Observações:
        <h1>Observações</h1>
        <h6 class="text-center">Insira abaixo as <strong> OBSERVAÇÕES </strong> do objeto que deseja registrar</h6>
        <div class="form-group">
            <label id="publicacao">Publicação </label>
            <input type="text" id="publicacao" name="publicacao" class="form-control" placeholder="Insira as publicações" value="<?php echo set_value('publicacao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="fontes-primarias">Fontes primárias </label>
            <input type="text" id="fontes-primarias" name="fontes-primarias" class="form-control" placeholder="Insira as fontes primárias" value="<?php echo set_value('fontes-primarias');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="fontes-bibliograficas">Fontes bibliográficas </label>
            <input type="text" id="fontes-bibliograficas" name="fontes-bibliograficas" class="form-control" placeholder="Insira as fontes bibliográficas" value="<?php echo set_value('fontes-bibliograficas');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="modo-aquisicao">Modo de aquisição </label>
            <input type="text" id="modo-aquisicao" name="modo-aquisicao" class="form-control" placeholder="Modo de aquisição" value="<?php echo set_value('modo-aquisicao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="data-aquisicao">Data da aquisição</label>
            <input type="date" id="data-aquisicao" name="data-aquisicao" class="form-control"  value="<?php echo set_value('data-aquisicao');?>" oninput="this.className = ''">
        </div>
    </div>

    <div class="tab">Preenchimento técnico:
        <h1>Preenchimento técnico</h1>
        <h6 class="text-center">Insira abaixo as informações <strong> TÉCNICAS </strong> do objeto que deseja registrar</h6>
        <div class="form-group">
            <label id="responsavel">Responsável pelo preechimento técnico (é o usuário que esta cadastrando?)</label>
            <input type="text" id="responsavel" name="responsavel" class="form-control" placeholder="Digite o responsável pelo preenchimento técnico" value="<?php echo set_value('responsavel');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="nome-fotografo">Nome do fotógrafo</label>
            <input type="text" id="nome-fotografo" name="nome-fotografo" class="form-control" placeholder="Digite o nome do fotógrafo" value="<?php echo set_value('nome-fotografo');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="responsavel-digitacao">Responsável pela digitação</label>
            <input type="text" id="responsavel-digitacao" name="responsavel-digitacao" class="form-control" placeholder="Digite o nome do responsável pela digitação" value="<?php echo set_value('responsavel-digitacao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="data-digitacao">Data da digitação (Data será automática?)</label>
            <input type="date" id="data-digitacao" name="data-digitacao" class="form-control"  value="<?php echo set_value('data-digitacao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="responsavel-revisao">Responsável pela revisão (Vai vir do banco, quando outro usuário analisar)</label>
            <input type="text" id="responsavel-revisao" name="responsavel-revisao" class="form-control" placeholder="Digite o nome do responsável pela revisão" value="<?php echo set_value('responsavel-revisao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="data-revisao">Data da revisão (Data será automática?)</label>
            <input type="date" id="data-revisao" name="data-revisao" class="form-control"  value="<?php echo set_value('data-revisao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="responsavel-alteracao">Responsável pela alteracao (Vai vir do banco, quando outro usuário analisar)</label>
            <input type="text" id="responsavel-alteracao" name="responsavel-alteracao" class="form-control" placeholder="Digite o nome do responsável pela alteracao" value="<?php echo set_value('responsavel-revisao');?>" oninput="this.className = ''">
        </div>
        <div class="form-group">
            <label id="data-alteracao">Data da alteracao (Data será automática?)</label>
            <input type="date" id="data-alteracao" name="data-alteracao" class="form-control"  value="<?php echo set_value('data-alteracao');?>" oninput="this.className = ''">
        </div>
    </div>


  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" class="btn btn-default" id="prevBtn" onclick="nextPrev(-1)">Voltar</button>
      <button type="button" class="btn btn-default" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
    </div>
  </div>


  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

  <!--button type="submit" class="btn btn-default btn-block" style="width: 300px;"> Cadastrar Informações </button-->

<?php
echo form_close();
?>

<!--script src="<?php echo base_url('assets/backend/js/formObras.js')?>"></script-->

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the crurrent tab

    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Enviar";
      } else {
        document.getElementById("nextBtn").innerHTML = "Avançar";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }

    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }

    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }

    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
</script>
</div>