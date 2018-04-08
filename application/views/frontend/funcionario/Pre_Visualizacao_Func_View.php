<div class="container">
    <div class="col-md-12">
        <div class="col-md-4">
                <h2>Perfil De Usuário</h2>

                <!-- Pega o id do funcionario atualmente logado -->
                    <?php $id_func_Logado = $this->session->userdata('usuariologado')->id_funcionario; ?>
                <!-- Passa o id do funcionario atualmente logado para a função de busca -->
                <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$id_func_Logado); ?>
                    <button type="submit" name="txt-visualizar" value=""> Visualizar Próprio Perfil </button>
                <?php echo form_close();?> 
        </div>
    
        <div class="col-md-8">
            <!-- Permite todas as operações do CRUD para um administrador -->
            <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
                
                     <h2> Gerenciar Usuários </h2>

                <a type="button" href= "<?php echo base_url('Funcionario_Controller/cadastrar_funcionario') ?>" >Cadastrar funcionário</a>
                    <?php foreach ($funcionarios as $funcionario){ ?>
                        <div class="row">
                            <div class="col-md-6">
                                <h4><?php  echo $funcionario->nome ?></h4>
                            </div>                            

                            <div class="col-md-2">
                                <p> Tipo: <?php  echo $funcionario->id_tipoFuncionario ?> </p>
                            </div>

                            <div class="col-md-2">
                                <p> Situação: <?php  echo $funcionario->situacao ?> </p>
                            </div>

                            <div class="col-md-2">
                                <p> Id: <?php  echo $funcionario->id_funcionario ?> </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
                                <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$funcionario->id_funcionario); ?>
                                    <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>
                                <?php echo form_close();?>
                            </div>

                            <div class="col-md-4">
                                 <!-- Para fazer a exclusão logica, a situação do usuário é mudada para o valor zero '0' -->
                                <?php if ($funcionario->situacao == 1) {?>
                                    <?php echo form_open('excuirL'); ?>
                                        <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                                        <input  type="hidden" name="txt-situacao" value="0"/>
                                        <button type="submit"> Excluir Usuário do Sistema </button>
                                    <?php echo form_close();?>
                                <?php
                                }?>

                                <!-- Para fazer a inclusao logica, a situação do usuário é mudada para o valor um '1' -->
                                <?php if ($funcionario->situacao == 0) {?>
                                    <?php echo form_open('incluirL'); ?>
                                        <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
                                        <input  type="hidden" name="txt-situacao" value="1"/>
                                        <button type="submit"> Reinserir Usuário No sistema </button>
                                    <?php echo form_close();?>
                                <?php
                                }?>
                            </div>                            
                        </div>
                    <?php }?>

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

            

