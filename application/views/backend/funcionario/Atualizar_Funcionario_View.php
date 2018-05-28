<div class="container">

    <div class="row">
            <!--  Botão para voltar para a pré-visualização  -->
        <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$id_funcionario); ?>
            <button type="submit"> Voltar </button>
        <?php echo form_close();?>
        <!--  FIM  -->
    </div>

    <div class="row">
        <h3> Editar Perfil </h3>

        <?php foreach($resultado as $funcionario){?>
            
            <?php
            echo validation_errors('<div class="alert alert-danger">','</div>');        
            echo form_open('Funcionario_Controller/salvar_atualizacao/'.$id_funcionario);
            ?>
                <!-- Coluna da esquerda -->
            <div class="col-md-6">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label id="txt-nome">Nome completo</label>
                        <input type="text" id="txt-nome" name="txt-nome" class="form-control" value="<?php echo $funcionario->nome ?>" >
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label id="txt-senha">Senha</label>
                            <input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label id="txt-cpf">CPF</label>
                            <input type="text" id="txt-cpf" name="txt-cpf" class="form-control" value="<?php echo $funcionario->cpf ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label id="txt-confirmar-senha">Confirmar senha</label>
                            <input type="password" id="txt-confirmar-senha" name="txt-confirmar-senha" class="form-control" placeholder="Confirmar senha" value="">
                        </div>

                        <div class="form-group col-md-6">
                            <label id="txt-email">Email</label>
                            <input type="text" id="txt-email" name="txt-email" class="form-control" value="<?php echo $funcionario->email ?>">
                        </div>
                    </div>                        

                    <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
                    <div class="form-group col-md-10">
                        <label id="txt-tipo">Tipo de Funcionario</label><br>
                        <select class="form-control" value="<?php echo $funcionario->id_tipoFuncionario ?>" name="txt-tipo" >
                            <option value="0">Escolher Tipo</option>
                            <option value="1">Administrador</option>
                            <option value="2">Supervisor</option>
                            <option value="3">Auxiliar</option>
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <input type="hidden" id="txt-situacao" name="txt-situacao" class="form-control" value="<?php echo $funcionario->situacao ?>">
                    </div>            
                    
                    <?php } ?>
                </div>
            </div>

            <!-- Coluna da direita -->
            <div class="col-md-6">
                <div class="form-group col-md-12">
                    <div class="img-container-card">
                        <p>Adicionar Foto</p>
                        <img src="https://cdn.icon-icons.com/icons2/67/PNG/512/user_13230.png" alt="">
                    </div>
                    <!-- <?php
                        echo form_open_multipart('Funcionario_Controller/adicionar_foto/'.$funcionario->id_funcionario);
                    ?>   -->                      
                </div>
            </div>
                

                <div class="row">
                     <div class="form-group col-md-12">
                        <button type="submit" style="width: 19vw;" class="btn btn-default"> Atualizar Informações </button>
                    </div>  
                 </div>                              
            <?php
            echo form_close();
            ?>

                
        <?php }?>
    </div>    
</div>
<br><br>
