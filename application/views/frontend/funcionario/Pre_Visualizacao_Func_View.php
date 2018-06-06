<div class="container">
    <div class="col-md-12">
        <div class="col-md-8">
            <!-- Permite todas as operações do CRUD para um administrador -->
            <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
                <div class="row">
                    <h2> Gerenciar Usuários </h2>

                    <!-- Código que leva para o form de cadasttro de obra -->
                    <a href= "<?php echo base_url('Funcionario_Controller/cadastrar_funcionario') ?>" ><button style="width: 19vw;margin-left: 90%" id="cadfunc" class="btn btn-default">Cadastrar funcionário</button></a>
                    <br><br>
                    <div class="container">
                    <?php foreach ($funcionarios as $funcionario){ ?>                        
                          <div class="container-card">
                            <div class="img-container-card">
                              <!-- Renderiza a imagem do funcionario caso ele tenha alguma -->
                              <?php
                                if($funcionario->img == 1){
                                  echo img("assets/img/usuarios/".$funcionario->id_funcionario.".jpg");
                                }
                                else{
                                  echo img("assets/img/default.png");
                                }                  
                              ?>
                            </div>
                            
                            <div class="content-card opcao">
                              <div class="head-card">
                                  <p><?php  echo $funcionario->nome ?>
                                  <?php if($funcionario->situacao == 1){  ?>
                                    <span class="status-ativo">Ativo</span>
                                  <?php } else if($funcionario->situacao == 0){ ?>
                                    <span class="status-dstv">Inativo</span>
                                   <?php } ?>
                              </p>
                                  
                                  <?php if($funcionario->id_tipoFuncionario == 1){  ?>
                                    <span class="tipo-admin">Administrador</span>
                                  <?php } else if($funcionario->id_tipoFuncionario == 2){  ?>
                                    <span class="tipo-supervisor">Supervisor</span>
                                   <?php } else if($funcionario->id_tipoFuncionario == 3){  ?>
                                    <span class="tipo-aux">Auxiliar</span>
                                   <?php } ?>
                              </div>
                              <div class="data">
                                <div class="inner-data">
                                     <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
                                <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$funcionario->id_funcionario); ?>
                                    <button class="btn btn-default" style="width: 250px;" type="submit" name="txt-visualizar" class="btn btn-outline-primary">Vizualizar Informações</button>
                                    
                                <?php echo form_close();?>

                                </div>
                                <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1){  ?>
                                <div class="inner-data">
                                     <!-- Para fazer a exclusão logica, a situação do usuário é mudada para o valor zero '0' -->
                                    <?php if ($funcionario->situacao == 1) {?>
                                        <?php echo form_open('excuirL'); ?>
                                            <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                                            <input  type="hidden" name="txt-situacao" value="0"/>
                                            <button style="width: 180px;margin-left: 35px;" type="submit" class="btn btn-default">Excluir Usuário</button>
                                        <?php echo form_close();?>
                                    <?php
                                    }?>
                                      <!-- Para fazer a inclusao logica, a situação do usuário é mudada para o valor um '1' -->
                                <?php if ($funcionario->situacao == 0) {?>
                                    <?php echo form_open('incluirL'); ?>
                                        <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                                        <input  type="hidden" name="txt-situacao" value="1"/>
                                        <button type="submit" style="margin-left: 30px;
    width: 165px;" class="btn btn-default"> Ativar Usuário </button>
                                    <?php echo form_close();?>
                                <?php
                                }?>
                                </div>
                                <?php } ?>
                              </div>
                            </div>  
                          </div>
                        <br>
                    <?php }?>
                    </div>
                </div>
            <!-- Exibe todos os usuários cadastrados -->
            <?php }?>

            <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 2) { ?>
                <p>Este usuário logado é um Supervisor de id_tipoFuncionario == 2 </p>
            <?php }?>

            <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 3) { ?>
                <p>Este usuário logado é um Auxiliar de id_tipoFuncionario == 3 </p>
            <?php }?>
        </div>
    </div>

</div>







            

