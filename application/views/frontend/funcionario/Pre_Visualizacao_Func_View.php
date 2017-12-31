<h1> Pré Visualização Funcionario</h1>

<br>

<?php echo form_open('inicio'); ?>
    <button type="submit" > Voltar inicio </button>
<?php echo form_close();?>

<br>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
    <p>Este usuário é um Administrador</p>
    <a type="button" href= "<?php echo base_url('cadastrar_funcionario') ?>" >Cadastrar funcionário</a>
    <br>

    <?php echo form_open('perfil'); ?>
        <input  type="hidden" name="txt-id_funcionario" value="<?php echo $this->session->userdata('usuariologado')->id_funcionario ?>" /> <br>
        <button type="submit" name="txt-visualizar" value=""> Visualizar Próprio Perfil </button>
    <?php echo form_close();?> 

    <fieldset>
        <legend> Gerenciar Usuários</legend>
        <!-- Exibe todos os usuários cadastrados -->
        <?php foreach ($funcionarios as $funcionario){ ?>
            <fieldset>
                <legend><?php  echo $funcionario->nome ?></legend>
                <p> Tipo: <?php  echo $funcionario->id_tipoFuncionario ?> </p>
                <p> Situação: <?php  echo $funcionario->situacao ?> </p>
                <p> Id: <?php  echo $funcionario->id_funcionario ?> </p>
                <p> Gustavo/Tristeza vejam se é interessante colocar os dados acima um na frente do outro, para ocupar menos espaço. Esta é uma mensagem do programador do passado Fagner ^^.</p>
            
                <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
                <?php echo form_open('perfil'); ?>
                    <input  type="hidden" name="txt-id_funcionario" value="<?php echo $funcionario->id_funcionario ?>"/><br>
                    <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>
                <?php echo form_close();?> 
            </fieldset>
        <?php }?>
    </fieldset>
    <!-- Colocar um código c link para gerenciar usuários. CRUD -->
<?php }?>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 2) { ?>
    <p>Este usuário é Supervisor</p>
    <a type="button" href= "<?php echo base_url('perfil') ?>" >Editar Perfil</a>
    
<?php }?>

<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 3) { ?>
    <p>Este usuário é Auxiliar</p>
    <a type="button" href= "<?php echo base_url('perfil') ?>" >Editar Perfil</a>

<?php }?>