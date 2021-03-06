<div class="container">

    <div class="row">
    <!--  Botão para voltar para a pré-visualização  -->
    <?php echo form_open('pre_visualizacao_funcionario'); ?>
         <button type="submit" class="btn btn-default"> Voltar </button>
    <?php echo form_close();?>
    <!--  FIM  -->
    </div>

    <div class="row">
        <h3>Cadastrar Novo Funcionário</h3>
        <hr>        

        <div class="col-md-12">
            <?php
                echo validation_errors('<div class="alert alert-danger">','</div>');
                echo form_open('Funcionario_Controller/salvar_funcionario');
            ?>
            <div class="row">
                <div class="form-group col-md-6">
                    <label id="txt-nome">Nome completo</label>
                    <input type="text" id="txt-nome" name="txt-nome" class="form-control" placeholder="Nome completo" value="<?php echo set_value('txt-nome');?>" >
                </div>
                
                <div class="form-group col-md-6">
                    <label id="txt-cpf">CPF</label>
                    <input type="text" id="txt-cpf" name="txt-cpf" class="form-control" placeholder="CPF" value="<?php echo set_value('txt-cpf');?>">
                </div>

                <div class="form-group col-md-6">
                    <label id="txt-email">Email</label>
                    <input type="text" id="txt-email" name="txt-email" class="form-control" placeholder="Email" value="<?php echo set_value('txt-email');?>">
                </div>

                <div class="form-group col-md-3">
                    <label id="txt-senha">Senha</label>
                    <input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha" value="<?php echo set_value('txt-senha');?>">
                </div>

                <div class="form-group col-md-3">
                    <label id="txt-confirmar-senha">Confirmar senha</label>
                    <input type="password" id="txt-confirmar-senha" name="txt-confirmar-senha" class="form-control" placeholder="Confirmar senha" value="<?php echo set_value('txt-confirmar-senha');?>">
                </div> 

                <div class="form-group col-md-6">
                    <label id="txt-tipo-func">Tipo de Funcionario</label><br>
                    <select class="form-control" name="txt-tipo-func" >
                        <option value="3">Auxiliar</option>
                        <option value="1">Administrador</option>
                        <option value="2">Supervisor</option>
                    </select>
                </div>                               
                
            </div>
            
            <!-- Botão de submeter o formulário -->
            <button type="submit" class="btn btn-default btn-cad-func">Cadastrar</button>
               <br><br>         
            <?php
                echo form_close();
            ?>
              <br><br>    
        </div>
    </div>        
</div>


