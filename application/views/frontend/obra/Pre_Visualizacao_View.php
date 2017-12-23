<h1> Pré Visualização </h1><br>

<?php echo form_open('inicio'); ?>
    <button type="submit" > Voltar inicio </button>
<?php echo form_close();?>

<br>
<br>
<br>

<?php echo form_open('Obra_Controller/cadastrar_obra'); ?>
    <button type="submit" > Nova Obra </button>
<?php echo form_close();?>

<div>
    <?php
    foreach ($obras as $obra){ ?>
        <fieldset>
            <legend> <?php echo $obra->nome_objeto ?> </legend>
            <p>
               <?php echo $obra->num_atual ?>
            </p>

            <p>
               <?php echo $obra->num_anterior ?>
            </p>

            <p>
               <?php echo $obra->titulo ?>
            </p>

            <p>
               <?php echo $obra->imagem ?>
            </p>

            <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
            <?php echo form_open('Obra_Controller/pesquisar_obra'); ?>

            <input  type="hidden" name="txt-id" value="<?php echo $obra->id_obra ?>"/><br>
            <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>

            <?php echo form_close();?>            
        </fieldset>
    <?php
    }?>
</div>
</div>