<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<h1> Restaurações </h1>

<!-- Botão para voltar a visualização da obra -->
<?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
    <button type="submit"> Voltar </button>
<?php echo form_close();?>
<!-- FIM -->

<div >

    <!-- Botão que direciona para a página de cadastro de restauração -->
    <?php echo form_open('Obra_Controller/cadastrar_restauracao/'.$id_obra); ?>
        <!-- <input  type="hidden" name="txt-id" value="<?php echo $id_obra ?>"/> -->
        <button type="submit"> Cadastrar restauração </button>
    <?php echo form_close();?>
    <!-- FIM -->

    <?php
    foreach ($restauracoes as $restauracao){ ?>

        <!-- <input  type="hidden" name="txt-id" value="<?php echo $restauracao->id_obra ?>"/> -->
        <div>
            ID: <?php echo $restauracao->id_restauracao?>
        </div>
        <div>
            Tipo de Intervenção: <?php echo $restauracao->intervencao?>
        </div>
        <div>
            <?php echo $restauracao->nome_restaurador?>
        </div>
        <div>
            <?php echo $restauracao->data_restauracao?>
        </div>

        <!-- Botão para atualizar uma restauração -->
        <?php echo form_open('Obra_Controller/atualizar_restauracao/'.$id_obra.'/'.$restauracao->id_restauracao); ?>
            <!-- <input  type="hidden" name="txt-id-rest" value="<?php echo $restauracao->id_restauracao ?>"/> -->
            <!-- <input  type="hidden" name="txt-id-obra" value="<?php echo $restauracao->id_obra ?>"/> -->
            <button type="submit" name="txt-restauracao" value=""> Atualizar restauracão </button>
        <?php echo form_close();?>
        <!-- FIM -->

        <!-- Botão para excluir uma restauração -->
        <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
        <button type="button" data-toggle="modal" data-target="#myModal">Excluir restauração</button>

        <!-- Modal de exclusão de obra -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Tem certeza que deseja excluir a restauracão?</h4>
                    </div>

                    <div class="modal-footer">
                        <div class="col-md-2">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <!-- Botão para excluir uma exposição -->
                            <?php echo form_open('Obra_Controller/excluir_restauracao/'.$id_obra.'/'.$restauracao->id_restauracao); ?>
                            <!-- <input  type="hidden" name="txt-id-obra" value="<?php echo $restauracao->id_obra ?>"/> -->
                            <!-- <input  type="hidden" name="txt-id-rest" value="<?php echo $restauracao->id_restauracao ?>"/> -->
                            <button type="submit" name="txt-visualizar" value=""> Sim </button>
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
