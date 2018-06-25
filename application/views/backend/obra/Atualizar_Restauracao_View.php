<body id="corpo">
<div class="contact tabsregistro">
    <div class="container">
        <!-- Botão para voltar a visualização das restauracoes -->
        <?php echo form_open('Obra_Controller/visualizar_restauracoes/'.$id_obra); ?>
            <button type="submit" class="btn btn-default"> Voltar </button>
        <?php echo form_close();?>
        <!-- FIM -->

        <div class="text-center">
            <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                <h1> Atualizar Restauração </h1>                 
            </div>
        </div>
    </div>
</div>

<?php if(isset($error)):?>
    <div><?=$error?></div>
<?php endif;?>

<div class="container" id="caixa2">
    <?php
    foreach ($restauracoes as $restauracao) {?>

        <?php
        echo validation_errors('<div class="alert alert-danger">','</div>');
        echo form_open('Obra_Controller/salvar_atualizacao_restauracao/'.$restauracao->id_obra.'/'.$restauracao->id_restauracao);
        ?>
        <!-- Passa o id da obra que será atualizada para o controller usar-->
        <div class="form-group col-md-6">
            <label id="nome-restaurador"> Nome do Restaurador </label>
            <input type="text" id="nome-restaurador" name="nome-restaurador" class="form-control" placeholder="Insira o nome do restaurador" value="<?php echo $restauracao->nome_restaurador?>">
        </div>

        <div class="form-group col-md-6">
            <label id="data-restauracao">Data da Restauração </label>
            <input type="date" id="data-restauracao" name="data-restauracao" class="form-control"  value="<?php echo $restauracao->data_restauracao?>">
        </div>

        <div class="form-group col-md-12">
            <label id="tipo-intervencao">Tipo de Intervenção</label>
            <textarea cols="100" rows="5" type="text" id="tipo-intervencao" name="tipo-intervencao" class="form-control" placeholder="Insira o tipo de intervenção" value="<?php echo $restauracao->intervencao?>"></textarea>
        </div>

        <button type="submit" class="btn btn-default" id="botao_atualizar">Atualizar </button>
        <?php
        echo form_close();
        ?>
        <?php
    }?>
</div>