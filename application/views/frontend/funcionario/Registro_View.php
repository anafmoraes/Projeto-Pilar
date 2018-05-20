<div class="container">
    <!--  Botão para voltar para a pré-visualização  -->
    <?php echo form_open('pre_visualizacao_funcionario'); ?>
        <button type="submit"> Voltar </button>
    <?php echo form_close();?>
    <!--  FIM  -->

    <h2>Perfil de usuário </h2>

    <?php foreach ($resultado as $funcionario){?>
        <p> Nome: <?php echo $funcionario->nome?> </p>
        <p> CPF: <?php echo $funcionario->cpf?> </p>
        <p> E-mail: <?php echo $funcionario->email?> </p>

        <?php if ($funcionario->id_tipoFuncionario == 1){?>
            <p> Tipo: Administrador </p>
        <?php
        }?>

        <?php if ($funcionario->id_tipoFuncionario == 2){?>
            <p> Tipo: Supervisor </p>
        <?php
        }?>

        <?php if ($funcionario->id_tipoFuncionario == 3){?>
            <p> Tipo: Auxiliar </p>
        <?php 
        }?>

        <?php if ($funcionario->situacao == 0){?>
            <p> Situação: Inativo no sistema </p>
        <?php
        }?>

        <?php if ($funcionario->situacao == 1){?>
            <p> Situação: Ativo no sistema </p>
        <?php
        }?>            

        <!-- passa os dados para o form, para serem mandados para o controller no método atualizar_perfil() -->
        <?php echo form_open('Funcionario_Controller/atualizar_perfil/'.$funcionario->id_funcionario); ?>
            <button type="submit"> Editar Perfil </button>
        <?php echo form_close();?>

        <?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
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
        <?php }?>
    <?php }?>
</div>



