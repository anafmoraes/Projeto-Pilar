<h1> Adicionar Informações de Restauração </h1>

<!--<link rel="stylesheet" href="--><?// echo base_url('assets/includes/bootstrap/css/bootstrap.min.css')?><!--"/>-->
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="col-md-1"></div>
        <div class="container-backend">
            <?php if(isset($error)):?>
                <div><?=$error?></div>
            <?php endif; ?>
            <div class="col-md-8">
                <?php
                echo validation_errors('<div class="alert alert-danger">','</div>');
                echo form_open_multipart('Obra_Controller/salvar_restauracao');
                ?>

                <input  type="hidden" name="txt-id" value="<?php echo $obra ?>"/>

                <div class="form-group">
                    <label id="tipo-intervencao">Tipo de Intervenção</label>
                    <input type="text" id="tipo-intervencao" name="tipo-intervencao" class="form-control" placeholder="Insira o tipo de intervenção" value="<?php echo set_value('tipo-intervencao');?>">
                </div>

                <div class="form-group">
                    <label id="nome-restaurador"> Nome do Restaurador </label>
                    <input type="text" id="nome-restaurador" name="nome-restaurador" class="form-control" placeholder="Insira o nome do restaurador" value="<?php echo set_value('nome-restaurador');?>">
                </div>

                <div class="form-group">
                    <label id="data-restauracao">Data da Restauração </label>
                    <input type="date" id="data-restauracao" name="data-restauracao" class="form-control"  value="<?php echo set_value('data-restauracao');?>">
                </div>

                <button type="submit" class="btn btn-default"> Cadastrar Informações </button>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>