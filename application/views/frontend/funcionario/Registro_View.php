<h1>Perfil de usuário </h1>

<!--  Botão para voltar para a pré-visualização  -->
<?php echo form_open('pre_visualizacao_funcionario'); ?>
    <button type="submit"> Voltar </button>
<?php echo form_close();?>
<!--  FIM  -->

<?php foreach ($resultado as $funcionario){?>
    <p> Nome: <?php echo $funcionario->nome?> </p>
    <p> CPF: <?php echo $funcionario->cpf?> </p>
    <p> E-mail: <?php echo $funcionario->email?> </p>
    <p> Tipo: <?php echo $funcionario->id_tipoFuncionario?> </p>
    <p> Situação: <?php echo $funcionario->situacao?> </p>

    <!-- passa os dados para o form, para serem mandados para o controller no método atualizar_perfil() -->
<?php echo form_open('Funcionario_Controller/atualizar_perfil/'.$funcionario->id_funcionario); ?>
    <button type="submit"> Editar Perfil </button>
<?php echo form_close();?>

<!-- Para fazer a exclusão logica, a situação do usuário é mudada para o valor zero '0' -->
<?php echo form_open('excuirL'); ?>
    <input  type="hidden" name="txt-id" value="<?php echo $funcionario->id_funcionario ?>"/>
    <input  type="hidden" name="txt-situacao" value="0"/>
    <button type="submit"> Excluir Usuário </button>
<?php echo form_close();?>

<?php }?>

