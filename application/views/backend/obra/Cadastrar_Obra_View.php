<?php echo form_open('pre_visualizacao'); ?>
    <button type="submit" > Voltar </button>
<?php echo form_close();?>


<h1> <?php echo $info ?> </h1>


<?php if(isset($error)):?>
    <div><?=$error?></div>
<?php endif;?>

<div>
    <?php
    echo validation_errors('<div class="alert alert-danger">','</div>');
    echo form_open('Obra_Controller/salvar_obra');
    ?>

        <h1>Localização</h1>
        <div class="form-group">
            <label id="localizacao">Localização</label>
            <input type="text" id="localizacao" name="localizacao" class="form-control" placeholder="Digite a localização do objeto" value="<?php echo set_value('localizacao');?>">
        </div>

        <h1>Identificação do bem</h1>
        <div class="form-group">
            <label id="numero-atual">Número atual</label>
            <input type="text" id="numero-atual" name="numero-atual" class="form-control" placeholder="Digite o número atual" value="<?php echo set_value('numero-atual');?>">
        </div>
        <div class="form-group">
            <label id="numero-anterior">Número anterior</label>
            <input type="text" id="numero-anterior" name="numero-anterior" class="form-control" placeholder="Digite o número anterior" value="<?php echo set_value('numero-anterior');?>">
        </div>
        <div class="form-group">
            <label id="fichas-relacionadas">Fichas relacionadas</label>
            <input type="text" id="fichas-relacionadas" name="fichas-relacionadas" class="form-control" placeholder="Digite as fichas relacionadas" value="<?php echo set_value('fichas-relacionadas');?>">
        </div>
        <div class="form-group">
            <label id="nome-objeto">Nome do objeto</label>
            <input type="text" id="nome-objeto" name="nome-objeto" class="form-control" placeholder="Digite o nome do objeto" value="<?php echo set_value('nome-objeto');?>">
        </div>
        <div class="form-group">
            <label id="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Digite o título" value="<?php echo set_value('titulo');?>">
        </div>
        <div class="form-group">
            <label id="classe">Classe</label>
            <input type="text" id="classe" name="classe" class="form-control" placeholder="Digite a classe do objeto" value="<?php echo set_value('classe');?>">
        </div>
        <div class="form-group">
            <label id="sub-classe">Sub-classe</label>
            <input type="text" id="sub-classe" name="sub-classe" class="form-control" placeholder="Digite a sub-classe do objeto" value="<?php echo set_value('sub-classe');?>">
        </div>
        <div class="form-group">
            <label id="material">Material</label>
            <input type="text" id="material" name="material" class="form-control" placeholder="Digite o material do objeto" value="<?php echo set_value('material');?>">
        </div>
        <div class="form-group">
            <label id="tecnica">Técnica</label>
            <input type="text" id="tecnica" name="tecnica" class="form-control" placeholder="Digite a técnica" value="<?php echo set_value('tecnica');?>">
        </div>
        <div class="form-group">
            <label id="inscricoes-marcas">Inscrições/marcas</label>
            <input type="text" id="inscricoes-marcas" name="inscricoes-marcas" class="form-control" placeholder="Digite as inscrições ou marcas" value="<?php echo set_value('inscricoes-marcas');?>">
        </div>
        <div class="form-group">
            <label id="epoca">Época</label>
            <input type="text" id="epoca" name="epoca" class="form-control" placeholder="Digite a época" value="<?php echo set_value('epoca');?>">
        </div>
        <div class="form-group">
            <label id="autoria">Autoria</label>
            <input type="text" id="autoria" name="autoria" class="form-control" placeholder="Digite o autor" value="<?php echo set_value('autoria');?>">
        </div>
        <div class="form-group">
            <label id="origem">Origem</label>
            <input type="text" id="origem" name="origem" class="form-control" placeholder="Digite a origem do objeto" value="<?php echo set_value('origem');?>">
        </div>
        <div class="form-group">
            <label id="procedencia">Procedência</label>
            <input type="text" id="procedencia" name="procedencia" class="form-control" placeholder="Digite a procedência do objeto" value="<?php echo set_value('procedencia');?>">
        </div>
        <div class="form-group">
            <label id="conservacao">Conservação</label>
            <input type="text" id="conservacao" name="conservacao" class="form-control" placeholder="Digite o estado de conservação do objeto" value="<?php echo set_value('conservacao');?>">
        </div>

        <h1>Dimensões</h1>
        <div class="form-group">
            <label id="altura">Altura</label>
            <input type="text" id="altura" name="altura" class="form-control" placeholder="Digite a altura do objeto" value="<?php echo set_value('altura');?>">
        </div>
        <div class="form-group">
            <label id="largura">Largura</label>
            <input type="text" id="largura" name="largura" class="form-control" placeholder="Digite a largura do objeto" value="<?php echo set_value('largura');?>">
        </div>
        <div class="form-group">
            <label id="comprimento">Comprimento</label>
            <input type="text" id="comprimento" name="comprimento" class="form-control" placeholder="Digite o comprimento do objeto" value="<?php echo set_value('comprimento');?>">
        </div>
        <div class="form-group">
            <label id="profundidade">Profundidade</label>
            <input type="text" id="profundidade" name="profundidade" class="form-control" placeholder="Digite a profundidade do objeto" value="<?php echo set_value('profundidade');?>">
        </div>
        <div class="form-group">
            <label id="diametro">Diâmetro</label>
            <input type="text" id="diametro" name="diametro" class="form-control" placeholder="Digite o diâmetro do objeto" value="<?php echo set_value('diametro');?>">
        </div>
        <div class="form-group">
            <label id="peso">Peso</label>
            <input type="text" id="peso" name="peso" class="form-control" placeholder="Digite o peso do objeto" value="<?php echo set_value('peso');?>">
        </div>
        <div class="form-group">
            <label id="circunferencia">Circunferência</label>
            <input type="text" id="circunferencia" name="circunferencia" class="form-control" placeholder="Digite a circunferência do objeto" value="<?php echo set_value('circunferencia');?>">
        </div>

        <h1>Análise do objeto</h1>
        <div class="form-group">
            <label id="descricao-objeto">Descrição do objeto </label>
            <input type="text" id="descricao-objeto" name="descricao-objeto" class="form-control" placeholder="Insira uma descrição para o objeto" value="<?php echo set_value('descricao-objeto');?>">
        </div>
        <div class="form-group">
            <label id="carac-tecnicas">Caracteristicas técnicas </label>
            <input type="text" id="carac-tecnicas" name="carac-tecnicas" class="form-control" placeholder="Insira as características técnicas" value="<?php echo set_value('carac-tecnicas');?>">
        </div>
        <div class="form-group">
            <label id="carac-inconografica">Caracteristicas inconográficas </label>
            <input type="text" id="carac-inconografica" name="carac-inconografica" class="form-control" placeholder="Insira as características inconográficas" value="<?php echo set_value('carac-inconografica');?>">
        </div>
        <div class="form-group">
            <label id="carac-estilisticas">Caracteristicas estilísticas </label>
            <input type="text" id="carac-estilisticas" name="carac-estilisticas" class="form-control" placeholder="Insira as características estilísticas" value="<?php echo set_value('carac-estilisticas');?>">
        </div>
        <div class="form-group">
            <label id="dados-historicos">Dados históricos </label>
            <input type="text" id="dados-historicos" name="dados-historicos" class="form-control" placeholder="Insira os dados históricos" value="<?php echo set_value('dados-historicos');?>">
        </div>

        <h1>Observações</h1>
        <div class="form-group">
            <label id="publicacao">Publicação </label>
            <input type="text" id="publicacao" name="publicacao" class="form-control" placeholder="Insira as publicações" value="<?php echo set_value('publicacao');?>">
        </div>
        <div class="form-group">
            <label id="fontes-primarias">Fontes primárias </label>
            <input type="text" id="fontes-primarias" name="fontes-primarias" class="form-control" placeholder="Insira as fontes primárias" value="<?php echo set_value('fontes-primarias');?>">
        </div>
        <div class="form-group">
            <label id="fontes-bibliograficas">Fontes bibliográficas </label>
            <input type="text" id="fontes-bibliograficas" name="fontes-bibliograficas" class="form-control" placeholder="Insira as fontes bibliográficas" value="<?php echo set_value('fontes-bibliograficas');?>">
        </div>
        <div class="form-group">
            <label id="modo-aquisicao">Modo de aquisição </label>
            <input type="text" id="modo-aquisicao" name="modo-aquisicao" class="form-control" placeholder="Modo de aquisição" value="<?php echo set_value('modo-aquisicao');?>">
        </div>
        <div class="form-group">
            <label id="data-aquisicao">Data da aquisição</label>
            <input type="date" id="data-aquisicao" name="data-aquisicao" class="form-control"  value="<?php echo set_value('data-aquisicao');?>">
        </div>

        <h1>Preenchimento técnico</h1>
        <div class="form-group">
            <label id="responsavel">Responsável pelo preechimento técnico (é o usuário que esta cadastrando?)</label>
            <input type="text" id="responsavel" name="responsavel" class="form-control" placeholder="Digite o responsável pelo preenchimento técnico" value="<?php echo set_value('responsavel');?>">
        </div>
        <div class="form-group">
            <label id="nome-fotografo">Nome do fotógrafo</label>
            <input type="text" id="nome-fotografo" name="nome-fotografo" class="form-control" placeholder="Digite o nome do fotógrafo" value="<?php echo set_value('nome-fotografo');?>">
        </div>
        <div class="form-group">
            <label id="responsavel-digitacao">Responsável pela digitação</label>
            <input type="text" id="responsavel-digitacao" name="responsavel-digitacao" class="form-control" placeholder="Digite o nome do responsável pela digitação" value="<?php echo set_value('responsavel-digitacao');?>">
        </div>
        <div class="form-group">
            <label id="data-digitacao">Data da digitação (Data será automática?)</label>
            <input type="date" id="data-digitacao" name="data-digitacao" class="form-control"  value="<?php echo set_value('data-digitacao');?>">
        </div>
        <div class="form-group">
            <label id="responsavel-revisao">Responsável pela revisão (Vai vir do banco, quando outro usuário analisar)</label>
            <input type="text" id="responsavel-revisao" name="responsavel-revisao" class="form-control" placeholder="Digite o nome do responsável pela revisão" value="<?php echo set_value('responsavel-revisao');?>">
        </div>
        <div class="form-group">
            <label id="data-revisao">Data da revisão (Data será automática?)</label>
            <input type="date" id="data-revisao" name="data-revisao" class="form-control"  value="<?php echo set_value('data-revisao');?>">
        </div>
        <div class="form-group">
            <label id="responsavel-alteracao">Responsável pela alteracao (Vai vir do banco, quando outro usuário analisar)</label>
            <input type="text" id="responsavel-alteracao" name="responsavel-alteracao" class="form-control" placeholder="Digite o nome do responsável pela alteracao" value="<?php echo set_value('responsavel-revisao');?>">
        </div>
        <div class="form-group">
            <label id="data-alteracao">Data da alteracao (Data será automática?)</label>
            <input type="date" id="data-alteracao" name="data-alteracao" class="form-control"  value="<?php echo set_value('data-alteracao');?>">
        </div>

        <button type="submit" class="btn btn-default"> Cadastrar Informações </button>
    <?php
    echo form_close();
    ?>

</div>