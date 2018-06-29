<div class="container">

    <div class="row">
            <!--  Botão para voltar para a pré-visualização  -->
        <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$id_funcionario); ?>
            <button type="submit" class="btn btn-default"> Voltar </button>
        <?php echo form_close();?>
        <!--  FIM  -->
    </div>

    <div class="row">
        <h3> Editar Perfil </h3>
        <hr>

        <?php foreach($resultado as $funcionario){?>
            <!-- Coluna da esquerda -->
            <div class="col-md-6">
                <?php
                echo validation_errors('<div class="alert alert-danger">','</div>');        
                echo form_open('Funcionario_Controller/salvar_atualizacao/'.$id_funcionario);
                ?>
                
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label id="txt-nome">Nome completo</label>
                            <input type="text" id="txt-nome" name="txt-nome" class="form-control" value="<?php echo $funcionario->nome ?>" >
                        </div>                        

                        <div class="form-group col-md-6">
                            <label id="txt-cpf">CPF</label>
                            <input type="text" id="txt-cpf" name="txt-cpf" class="form-control" value="<?php echo $funcionario->cpf ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label id="txt-email">Email</label>
                            <input type="text" id="txt-email" name="txt-email" class="form-control" value="<?php echo $funcionario->email ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label id="txt-senha">Senha</label>
                            <input type="password" id="txt-senha" name="txt-senha" class="form-control" placeholder="Senha" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label id="txt-confirmar-senha">Confirmar senha</label>
                            <input type="password" id="txt-confirmar-senha" name="txt-confirmar-senha" class="form-control" placeholder="Confirmar senha" value="">
                        </div>
                          
                        <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
                            <div class="form-group col-md-6">
                                <label id="txt-tipo">Tipo de Funcionario</label><br>
                                <select class="form-control" value="<?php echo $funcionario->id_tipoFuncionario ?>" name="txt-tipo" >
                                   
                                   <?php if  ($funcionario->id_tipoFuncionario == 1) { ?>
                                        <option selected value="1">Administrador</option>
                                    <?php }else{ ?>
                                        <option value="1">Administrador</option>
                                    <?php } ?>    
                                    <?php if  ($funcionario->id_tipoFuncionario == 2) { ?>
                                        <option selected value="2">Supervisor</option>
                                    <?php }else{ ?>
                                        <option value="2">Supervisor</option>
                                    <?php } ?>    
                                    <?php if  ($funcionario->id_tipoFuncionario == 3) { ?>
                                        <option selected value="3">Auxiliar</option>
                                    <?php }else{ ?>
                                        <option value="3">Auxiliar</option>
                                    <?php } ?>    
                                    
                                    
                                </select>
                            </div>                        
                        <?php } else { ?>
                                 <div class="form-group col-md-6 esconder" >
                                <label id="txt-tipo">Tipo de Funcionario</label><br>
                                <select class="form-control" value="<?php echo $funcionario->id_tipoFuncionario ?>" name="txt-tipo" >
                                   
                                   <?php if  ($funcionario->id_tipoFuncionario == 1) { ?>
                                        <option selected value="1">Administrador</option>
                                    <?php }else{ ?>
                                        <option value="1">Administrador</option>
                                    <?php } ?>    
                                    <?php if  ($funcionario->id_tipoFuncionario == 2) { ?>
                                        <option selected value="2">Supervisor</option>
                                    <?php }else{ ?>
                                        <option value="2">Supervisor</option>
                                    <?php } ?>    
                                    <?php if  ($funcionario->id_tipoFuncionario == 3) { ?>
                                        <option selected value="3">Auxiliar</option>
                                    <?php }else{ ?>
                                        <option value="3">Auxiliar</option>
                                    <?php } ?>    
                                    
                                    
                                </select>
                            </div>  
                         <?php } ?>     
                        <div class="form-group col-md-12">
                            <input type="hidden" id="txt-situacao" name="txt-situacao" class="form-control" value="<?php echo $funcionario->situacao ?>">
                        </div>   
                    </div>
                    
                    <div class="row">
                         <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-default tam-atualizar-btn"> Atualizar Informações </button>
                        </div>  
                     </div>                              
                <?php
                echo form_close();
                ?>
            </div>

            <!-- Coluna da direita -->
            <div class="col-md-6" id="div-foto">
                <div class="form-group col-md-12" >
                    <div class="img-container-card">
                        <label class="form-group"> Imagem do Perfil (.jpg) </label>
                        <div class="row" class="img-perfil-div">
                            <div class="col-lg-12 col-lg-offset-3">
                                <?php
                                    if($funcionario->img == 1){
                                      echo img("assets/img/usuarios/".$funcionario->id_funcionario.".jpg");
                                    }
                                    else{
                                      echo img("assets/img/default.png");
                                    }                  
                                ?>
                            </div>
                        </div>                            
                            
                    </div>
                    <?php
                        //Cria variaveis para estilizar o form de imagem
                        $div_open = '<div class="form-group" >';
                        $div_close = '</div>';

                        // Chama o form de imagem
                        echo form_open_multipart('Funcionario_Controller/adicionar_foto/'.$id_funcionario);
                        //Passa o id do usuario p ser usado no controller e model
                        echo form_hidden('id_funcionario', $id_funcionario);
                        echo $div_open;
                        //cria um arrray com as definicões que o form upload deve ter
                        $imagem = array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                        //definicao padrão para arqivos q serao enviados para servers remotos, obrigado a ser 'userfile'
                        echo form_upload($imagem);
                        echo $div_close;
                        echo $div_open;
                        //Cria as definições dos atributos html do botao
                        $botao = array('name' => 'btn-adicionar', 'id' => 'btn-adicionar', 'class' => 'btn btn-default', 'value' => 'Adicionar Nova Imagem');
                        //Cria botão de submit do form;
                        echo form_submit($botao);
                        echo$div_close;
                        //Fecha o form
                        echo form_close();

                    ?>      

                </div>
            </div>
        <?php }?>
    </div>    
</div>
<br><br>
