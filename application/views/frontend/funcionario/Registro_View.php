<div class="container">
     <!--  Botão para voltar para a pré-visualização  -->
      <?php foreach ($resultado as $funcionario){ ?>
          <?php echo form_open('pre_visualizacao_funcionario'); ?>
              <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1){  ?>
               
                  <button type="submit"class="btn btn-default"> Voltar </button>
              <?php } ?>  
          <?php echo form_close();?>
    <br><br>
    <!--  FIM  -->
    
            <div class="container-card-edit">
              <div class="img-container-card">

                <?php
                  if($funcionario->img == 1){
                    echo img("assets/img/usuarios/".$funcionario->id_funcionario.".jpg");
                  }
                  else{
                    echo img("assets/img/default.png");
                  }                  
                ?>
                <!-- <img src="https://cdn.icon-icons.com/icons2/67/PNG/512/user_13230.png" alt=""> -->
              </div>
              
              <div class="content-card opcao">
                <div class="head-card">
                  <p>
                    <?php  echo $funcionario->nome ?>
                    <?php if($funcionario->situacao == 1){  ?>
                      <span class="status-ativo">Ativo</span>
                    <?php }
                    else if($funcionario->situacao == 0){ ?>
                      <span class="status-dstv">Inativo</span>
                    <?php } ?>
                  </p>
                    
                    <?php if($funcionario->id_tipoFuncionario == 1){  ?>
                      <span class="tipo-admin">Administrador</span>
                    <?php }
                    else if($funcionario->id_tipoFuncionario == 2){  ?>
                      <span class="tipo-supervisor">Supervisor</span>
                     <?php }
                        else if($funcionario->id_tipoFuncionario == 3){  ?>
                          <span class="tipo-aux">Auxiliar</span>
                        <?php } ?>
                     <br><br>
                     <span class="dados">CPF:  <?php echo $funcionario->cpf?></span>
                     <br><br>
                     <span class="dados"> E-mail: <?php echo $funcionario->email?> </span>
                </div>

                <div class="data">
                  <div class="inner-data">
                        <!-- passa os dados para o form, para serem mandados para o controller no método atualizar_perfil() -->
                      <?php echo form_open('Funcionario_Controller/atualizar_perfil/'.$funcionario->id_funcionario); ?>
                          <button class="btn btn-default" type="submit" style="width:155px;"> Editar Perfil </button>
                      <?php echo form_close();?>

                  </div>
                    <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1){  ?>
                  <div class="inner-data">
                       <!-- Para fazer a exclusão logica, a situação do usuário é mudada para o valor zero '0' -->
                      <?php if ($funcionario->situacao == 1) {?>
                          <?php echo form_open('excuirL'); ?>
                              <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                              <input  type="hidden" name="txt-situacao" value="0"/>
                              <button type="submit" class="btn btn-default" style="width: 180px;">Excluir Usuário </button>
                          <?php echo form_close();?>
                      <?php
                      }?>
                        <!-- Para fazer a inclusao logica, a situação do usuário é mudada para o valor um '1' -->
                  <?php if ($funcionario->situacao == 0) {?>
                      <?php echo form_open('incluirL'); ?>
                          <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                          <input  type="hidden" name="txt-situacao" value="1"/>
                          <button type="submit" class="btn btn-default" style="width: 180px;"> Inserir Usuário</button>
                      <?php echo form_close();?>
                  <?php
                  }?>
                  </div>
                  <?php
                  }?>
                </div>
              </div>  
            </div>
          <br>
      <?php }?>
      </div>
  </div>