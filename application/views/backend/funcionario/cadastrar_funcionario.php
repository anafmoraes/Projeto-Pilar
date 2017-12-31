<?php echo form_open('inicio'); ?>
    <button type="submit" > Voltar inicio </button>
<?php echo form_close();?>pre_visualizacao_funcionario
<br>
<br>
<br>
<div >
    <?php
        echo validation_errors('<div class="alert alert-danger">','</div>');
        echo form_open('Funcionario_Controller/salvar_funcionario');
    ?>
    <div class="form-group col-md-6">
        <label id="txt-nome">Nome completo</label>
        <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Nome completo" value="<?php echo set_value('txt-nome');?>" >
    </div>
    <div class="form-group col-md-3">
        <label id="txt-senha">Senha</label>
        <input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha" value="<?php echo set_value('txt-senha');?>">
    </div>
    <div class="form-group col-md-3">
        <label id="txt-confirmar-senha">Confirmar senha</label>
        <input type="password" id="txt-confirmar-senha" name="txt-confirmar-senha" class="form-control" placeholder="Confirmar senha" value="<?php echo set_value('txt-confirmar-senha');?>">
    </div>
    <div class="form-group col-md-3">
        <label id="txt-cpf">CPF</label>
        <input type="text" id="txt-cpf" name="txt-cpf" class="form-control" placeholder="CPF" value="<?php echo set_value('txt-cpf');?>">
    </div>
    <div class="form-group col-md-5">
        <label id="txt-email">Email</label>
        <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Email" value="<?php echo set_value('txt-email');?>">
    </div>

    <button type="submit" class="btn btn-default">Cadastrar</button>
    <?php
        echo form_close();
    ?>
</div>
