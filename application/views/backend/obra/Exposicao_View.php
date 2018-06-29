<body id="corpo">
<div class="container">
    <div class="row">
        <div class="col-md-2">
           <!--  Botão para voltar para a pré-visualização  -->
            <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
                <button id="botao_voltar" class="btn btn-default" type="submit"> Voltar </button>
            <?php echo form_close();?>
            <!--  FIM  -->
        </div>

        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar de botões" id="alinhar_direita">
          <div class="btn-group mr-2" role="group">
            <!-- Botão que direciona para a página de cadastro de exposição -->
            <?php echo form_open('Obra_Controller/cadastrar_exposicao/'.$id_obra); ?>
                <button id="botao_exposicao" class="btn btn-default" type="submit"> Cadastrar Exposição </button>
            <?php echo form_close();?>
            <!-- FIM -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s"><h1> Exposições </h1></div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <!-- Lista todas as obras registradas no banco de dados -->
    <?php
        foreach ($exposicoes as $exposicao){ ?>
    <div class="row" id="caixaexposicao">
        <h3><?php echo $exposicao->nome_exposicao?> </h3>
        <div class="col-sm-12">
            <label>Local da exposição: </label>
            <input readonly="readonly" class="form-control" placeholder="<?php echo $exposicao->local_realizacao?>">
        </div>
        <div class="col-sm-6">
            <label>Início: </label>
            <input readonly="true" class="form-control" placeholder="<?php echo $exposicao->data_inicio?>">
        </div>
        <div class="col-sm-6">
            <label>Término: </label>
            <input readonly="true" class="form-control" placeholder="<?php echo $exposicao->data_fim?>">
        </div> 
        <div class="col-sm-12" align="justify">
            <label>Descrição da exposição: </label>
            <textarea rows="5" readonly="true" class="form-control" placeholder="<?php echo $exposicao->descricao?>"></textarea> <br>
        </div>
        <div class="col-sm-4">
                            <!-- Botão para atualizar uma exposição -->
                            <?php echo form_open('Obra_Controller/atualizar_exposicao/'.$id_obra.'/'.$exposicao->id_exposicao); ?>
                                <button id="botao_atualizar" class="btn btn-default" type="submit" name="txt-visualizar" value=""><span class="oi oi-loop-circular"></span> Atualizar </button>
                            <?php echo form_close();?>
                            <!-- FIM -->
        </div>
        <div class="col-sm-4">
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
    <?php
    }?>
</div>
