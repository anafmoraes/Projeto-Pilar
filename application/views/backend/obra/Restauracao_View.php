<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<h1> Restaurações </h1>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <!-- Botão para voltar a visualização da obra -->
            <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
                <button style="width: 110px" class="btn btn-default" type="submit"> Voltar </button>
            <?php echo form_close();?>
            <!-- FIM -->
        </div>

        <div class="col-sm-offset-10">
            <!-- Botão que direciona para a página de cadastro de restauração -->
            <?php echo form_open('Obra_Controller/cadastrar_restauracao/'.$id_obra); ?>
                <!-- <input  type="hidden" name="txt-id" value="<?php echo $id_obra ?>"/> -->
                <button style="width: 250px" class="btn btn-default" type="submit"> Cadastrar restauração </button>
            <?php echo form_close();?>
            <!-- FIM -->
        </div>
    </div>
</div>

<div class="container text-center">
    <!-- Lista todas as obras registradas no banco de dados -->
    <?php
        foreach ($restauracoes as $restauracao){ ?>
    <div class="row">
        <div class="col-sm-offset-2">
            <div class="card" style="width: 75rem">
                <div class="card-header">
                    <h3> Restauração de número <?php echo $restauracao->id_restauracao?> </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <p class="card-text">
                            <div class="col-sm-12">
                               <b>Tipo de Intervenção: </b><?php echo $restauracao->intervencao?> <br>
                                <b>Nome do restaurador: </b><?php echo $restauracao->nome_restaurador?> <br>
                                <b>Data da restauração: </b><?php echo $restauracao->data_restauracao?>
                            </div>
                        </p>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <div class="col-sm-6">
                            <!-- Botão para atualizar uma restauração -->
                            <?php echo form_open('Obra_Controller/atualizar_restauracao/'.$id_obra.'/'.$restauracao->id_restauracao); ?>
                                <!-- <input  type="hidden" name="txt-id-rest" value="<?php echo $restauracao->id_restauracao ?>"/> -->
                                <!-- <input  type="hidden" name="txt-id-obra" value="<?php echo $restauracao->id_obra ?>"/> -->
                                <button style="width: 200px" class="btn btn-default" type="submit" name="txt-restauracao" value=""><span class="oi oi-loop-circular"></span> Atualizar </button>
                            <?php echo form_close();?>
                            <!-- FIM -->
                    </div>
                    <div class="col-sm-6">
                            <!-- Botão para excluir uma restauração -->
                            <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
                            <button style="width: 200px" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal"><span class="oi oi-trash"></span> Excluir</button>

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
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
    <br>
    <?php
    }?>
</div>