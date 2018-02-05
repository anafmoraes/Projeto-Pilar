<h1> Pré Visualização Funcionario</h1>

<?php echo form_open('inicio'); ?>
    <button type="submit" > Voltar inicio </button>
<?php echo form_close();?>

<!-- Pega o id do funcionario atualmente logado -->
    <?php $id_func_Logado = $this->session->userdata('usuariologado')->id_funcionario; ?>

    <!-- Passa o id do funcionario atualmente logado para a função de busca -->
    <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$id_func_Logado); ?>
        <button type="submit" name="txt-visualizar" value=""> Visualizar Próprio Perfil </button>
    <?php echo form_close();?> 

<!-- Permite todas as operações do CRUD para um administrador -->
<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>

    <p>Este usuário logado é um Administrador de id_tipoFuncionario == 1 </p>

    <a type="button" href= "<?php echo base_url('cadastrar_funcionario') ?>" >Cadastrar funcionário</a>
    
    <br>
    <br>

    <fieldset>
        <legend> Gerenciar Usuários</legend>
        <!-- Exibe todos os usuários cadastrados -->
        <?php foreach ($funcionarios as $funcionario){ ?>
            <fieldset>
                <legend><?php  echo $funcionario->nome ?></legend>
                <p> Tipo: <?php  echo $funcionario->id_tipoFuncionario ?> </p>
                <p> Situação: <?php  echo $funcionario->situacao ?> </p>
                <p> Id: <?php  echo $funcionario->id_funcionario ?> </p>
                <p> Gustavo/Tristeza vejam se é interessante colocar os dados acima um na frente do outro, para ocupar menos espaço.<br>
                    Esta é uma mensagem do programador do passado Fagner ^^. <br>
                    Reparem também que a situação do funcionário pode ser 0 ou 1,<br>
                    então criem um boxmodel para funcionarios ativos e inativos ok? <br>
                    QQ dúvida me perguntem</p>
            
                <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
                <?php echo form_open('Funcionario_Controller/pesquisar_funcionario/'.$funcionario->id_funcionario); ?>
                    <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>
                <?php echo form_close();?> 
            </fieldset>
        <?php }?>
    </fieldset>

    <!-- Colocar um código c link para gerenciar usuários. CRUD -->
<?php }?>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 2) { ?>
    <p>Este usuário logado é um Supervisor</p>
    <a type="button" href= "<?php echo base_url('perfil') ?>" >Editar Perfil</a>
    
<?php }?>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 3) { ?>
    <p>Este usuário logado é um Auxiliar</p>
    <a type="button" href= "<?php echo base_url('perfil') ?>" >Editar Perfil</a>

<?php }?>