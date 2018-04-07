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

                <a type="button" href= "<?php echo base_url('cadastrar_funcionario') ?>" >Cadastrar funcionário</a>
                    <?php foreach ($funcionarios as $funcionario){ ?>
                        <h4><?php  echo $funcionario->nome ?></h4>
                        <p> Tipo: <?php  echo $funcionario->id_tipoFuncionario ?> </p>
                        <p> Situação: <?php  echo $funcionario->situacao ?> </p>
                        <p> Id: <?php  echo $funcionario->id_funcionario ?> </p>
                        <p> Pessoal do frontend vejam se é interessante colocar os dados do registro acima um na frente do outro, para ocupar menos espaço.<br>
                        Esta é uma mensagem do programador do passado Fagner ^^. <br>
                        Reparem também que a situação do funcionário pode ser 0 ou 1, sendo 0 inativo e 1 ativo<br>
                        então criem um boxmodel com uma tabela para funcionarios ativos e outra para funcionarios inativos lado a lado ok? (Apenas sugestão) <br>
                        QQ dúvida me perguntem</p>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
                                <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$funcionario->id_funcionario); ?>
                                    <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>
                                <?php echo form_close();?>
                            </div>

                            <div class="col-md-6">
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

            

