<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<h1> Exposições </h1>

<div>
    <!-- Botão para voltar a visualização da obra -->
    <?php echo form_open('Obra_Controller/pesquisar_obra'); ?>
        <input  type="hidden" name="txt-id" value="<?php echo $id ?>"/>
        <button type="submit"> Voltar </button>
    <?php echo form_close();?>
    <!-- FIM -->

    <!-- Botão que direciona para a página de cadastro de exposição -->
    <?php echo form_open('Obra_Controller/cadastrar_exposicao'); ?>
        <input  type="hidden" name="txt-id" value="<?php echo $id ?>"/>
        <button type="submit"> Cadastrar exposição </button>
    <?php echo form_close();?>
    <!-- FIM -->

    <?php
    foreach ($exposicoes as $exposicao){ ?>

        <div>
            <?php echo $exposicao->nome_exposicao?>
        </div>
        <div>
            <?php echo $exposicao->descricao?>
        </div>
        <div>
            <?php echo $exposicao->local_realizacao?>
        </div>
        <div>
            <?php echo $exposicao->data_inicio?>
        </div>
        <div>
            <?php echo $exposicao->data_fim?>
        </div>

        <!-- Botão para atualizar uma exposição -->
        <?php echo form_open('Obra_Controller/atualizar_exposicao'); ?>
            <input  type="hidden" name="txt-id-exp" value="<?php echo $exposicao->id_exposicao ?>"/>
            <input  type="hidden" name="txt-id-obra" value="<?php echo $exposicao->id_obra ?>"/>
            <button type="submit" name="txt-visualizar" value=""> Atualizar exposição </button>
        <?php echo form_close();?>
        <!-- FIM -->

        <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
        <button type="button" data-toggle="modal" data-target="#myModal">Excluir exposição</button>

        <!-- Modal de exclusão de obra -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tem certeza que deseja excluir a exposicão?</h4>
                    </div>

                    <div class="modal-footer">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <!-- Botão para excluir uma exposição -->
                            <?php echo form_open('Obra_Controller/excluir_exposicao'); ?>
                                <input  type="hidden" name="txt-id-obra" value="<?php echo $exposicao->id_obra ?>"/>
                                <input  type="hidden" name="txt-id-exp" value="<?php echo $exposicao->id_exposicao ?>"/>
                                <button type="submit" name="txt-visualizar" class="btn btn-secondary" value=""> Sim </button>
                            <?php echo form_close();?>
                            <!-- FIM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fim modal de exclusão de obra -->

        <br>
        <br>
        <br>
        <?php
    }?>

</div>
