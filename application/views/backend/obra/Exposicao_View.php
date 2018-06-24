<h1> Exposições </h1>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <!--  Botão para voltar para a pré-visualização  -->
            <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
                <button id="botao_voltar" class="btn btn-default" type="submit"> Voltar </button>
            <?php echo form_close();?>
            <!--  FIM  -->
        </div>

        <div class="col-sm-offset-10">
            <!-- Botão que direciona para a página de cadastro de exposição -->
            <?php echo form_open('Obra_Controller/cadastrar_exposicao/'.$id_obra); ?>
                <button id="botao_exposicao" class="btn btn-default" type="submit"> Cadastrar Exposição </button>
            <?php echo form_close();?>
            <!-- FIM -->
        </div>
    </div>
</div>

<div class="container text-center">
    <!-- Lista todas as obras registradas no banco de dados -->
    <?php
        foreach ($exposicoes as $exposicao){ ?>
    <div class="row">
        <div class="col-sm-offset-2">
            <div class="card" id="tamanho_card">
                <div class="card-header">
                    <h3><?php echo $exposicao->nome_exposicao?> </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <p class="card-text" id="sem_titulo">
                            <div class="col-sm-6">
                                <b>Local da exposição: </b><br>
                                <?php echo $exposicao->local_realizacao?><br>
                            </div>
                            <div class="col-sm-6">
                               <b>Início: </b><?php echo $exposicao->data_inicio?><br>
                                <b>Término: </b><?php echo $exposicao->data_fim?><br>
                            </div> 
                            <hr>
                        </p>
                        <p class="card-text text-justify" id="sem_titulo">
                            <div class="col-sm-12">
                                <b>Descrição da exposição: </b><br>
                                <?php echo $exposicao->descricao?><br>
                            </div>
                        </p>
                    </div>                    
                </div>
                <div class="card-footer text-muted">
                        <div class="col-sm-6">
                            <!-- Botão para atualizar uma exposição -->
                            <?php echo form_open('Obra_Controller/atualizar_exposicao/'.$id_obra.'/'.$exposicao->id_exposicao); ?>
                                <button id="botao_atualizar" class="btn btn-default" type="submit" name="txt-visualizar" value=""><span class="oi oi-loop-circular"></span> Atualizar </button>
                            <?php echo form_close();?>
                            <!-- FIM -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
                            <button id="botao_excluir" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal"> <span class="oi oi-trash"></span> Excluir</button>

                            <!-- Modal de exclusão de exposicao -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Tem certeza que deseja excluir a exposicão?</h4>
                                        </div>

                                        <div class="modal-footer">
                                            <div class="col-md-2">
                                                <!-- Botão para excluir uma exposição -->
                                                <?php echo form_open('Obra_Controller/excluir_exposicao/'.$exposicao->id_obra.'/'.$exposicao->id_exposicao); ?>
                                                    <button class="btn btn-default" type="submit" name="txt-visualizar" class="btn btn-secondary" value=""> Sim </button>
                                                <?php echo form_close();?>
                                                <!-- FIM -->
                                            </div>
                                            <div class="col-md-offset-4">
                                                <button class="btn btn-default" type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
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
