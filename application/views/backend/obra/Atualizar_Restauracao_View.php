<h1> Atualizar exposição </h1>

<?php if(isset($error)):?>
    <div><?=$error?></div>
<?php endif;?>

<div>
    <?php
    foreach ($restauracoes as $restauracao) {?>

        <?php
        echo validation_errors('<div class="alert alert-danger">','</div>');
        echo form_open('Obra_Controller/salvar_atualizacao_restauracao');
        ?>
        <!-- Passa o id da obra que será atualizada para o controller usar-->
        <input  type="hidden" name="txt-id-rest" value="<?php echo $restauracao->id_restauracao ?>"/>
        <input  type="hidden" name="txt-id-obra" value="<?php echo $restauracao->id_obra ?>"/>
        <!-- FIM -->
        <div class="form-group">
            <label id="tipo-intervencao">Tipo de Intervenção</label>
            <input type="text" id="tipo-intervencao" name="tipo-intervencao" class="form-control" placeholder="Insira o tipo de intervenção" value="<?php echo $restauracao->intervencao?>">
        </div>

        <div class="form-group">
            <label id="nome-restaurador"> Nome do Restaurador </label>
            <input type="text" id="nome-restaurador" name="nome-restaurador" class="form-control" placeholder="Insira o nome do restaurador" value="<?php echo $restauracao->nome_restaurador?>">
        </div>

        <div class="form-group">
            <label id="data-restauracao">Data da Restauração </label>
            <input type="date" id="data-restauracao" name="data-restauracao" class="form-control"  value="<?php echo $restauracao->data_restauracao?>">
        </div>

        <button type="submit" class="btn btn-default"> Atualizar Restauração </button>
        <?php
        echo form_close();
        ?>
        <?php
    }?>
</div>