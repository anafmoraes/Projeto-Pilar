<h1> Atualizar exposição </h1>

<?php if(isset($error)):?>
    <div><?=$error?></div>
<?php endif;?>

<!-- Botão para voltar a visualização das exposicoes -->
<?php echo form_open('Obra_Controller/visualizar_exposicoes/'.$id_obra); ?>
    <button type="submit"> Voltar </button>
<?php echo form_close();?>
<!-- FIM -->

<div>
    <?php
    foreach ($exposicoes as $exposicao) {?>

        <?php
            echo validation_errors('<div class="alert alert-danger">','</div>');
            echo form_open('Obra_Controller/salvar_atualizacao_exposicao/'.$exposicao->id_obra.'/'.$exposicao->id_exposicao);
        ?>

        <!-- Inputs não visiveis para manter a referencia da obra e da exposição-->
        <!-- <input  type="hidden" name="txt-id-exp" value="<?php echo $exposicao->id_exposicao ?>"/> -->
        <!-- <input  type="hidden" name="txt-id-obra" value="<?php echo $exposicao->id_obra ?>"/> -->
        <!-- FIM -->
        <div class="form-group">
            <label id="nome-exposicao">Nome da Exposição</label>
            <input type="text" id="nome-exposicao" name="nome-exposicao" class="form-control" placeholder="Insira o nome da exposição" value="<?php echo $exposicao->nome_exposicao ?>">
        </div>
        <div class="form-group">
            <label id="descricao-exposicao">Descrição</label>
            <input type="text" id="descricao-exposicao" name="descricao-exposicao" class="form-control" placeholder="Descreva o evento" value="<?php echo $exposicao->descricao ?>">
        </div>
        <div class="form-group">
            <label id="local-realizacao">Local de Realização</label>
            <input type="text" id="local-realizacao" name="local-realizacao" class="form-control" placeholder="Insira os dados de localização" value="<?php echo $exposicao->local_realizacao ?>">
        </div>
        <div class="form-group">
            <label id="data-inicio-exp">Data de Início da Exposição</label>
            <input type="date" id="data-inicio-exp" name="data-inicio-exp" class="form-control"  value="<?php echo $exposicao->data_inicio ?>">
        </div>
        <div class="form-group">
            <label id="data-fim-exp">Data de Término da Exposição</label>
            <input type="date" id="data-fim-exp" name="data-fim-exp" class="form-control"  value="<?php echo $exposicao->data_fim ?>">
        </div>


        <button type="submit" class="btn btn-default"> Atualizar Exposição </button>
        <?php
        echo form_close();
        ?>
        <?php
    }?>
</div>