<body id="corpo">
<div class="container">
    <div class="row">
        <div class="col-md-2">
           <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
                <button class="btn btn-default" type="submit" id="botao_voltar"> Voltar </button>
            <?php echo form_close();?>
            <!-- FIM -->
        </div>

        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar de botões" id="alinhar_direita">
          <div class="btn-group mr-2" role="group">
            <!-- Botão que direciona para a página de cadastro de restauração -->
                <?php echo form_open('Obra_Controller/cadastrar_restauracao/'.$id_obra); ?>
                <!-- <input  type="hidden" name="txt-id" value="<?php echo $id_obra ?>"/> -->
                <button id="botao_restauracao" class="btn btn-default" type="submit"> Cadastrar restauração </button>
                <?php echo form_close();?>
               <!-- FIM -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s"><h1> Restaurações </h1></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Lista todas as obras registradas no banco de dados -->
    <?php
        foreach ($restauracoes as $restauracao){ ?>
        <div class="row" id="caixarestauracao">
            <div class="col-sm-6">
                <label>Nome do restaurador: </label>
                <input readonly="true" class="form-control" placeholder="<?php echo $restauracao->nome_restaurador?>">
                </div>
            <div class="col-sm-6">
                <label>Data da restauração: </label>
                <input readonly="true" class="form-control" placeholder="<?php echo $restauracao->data_restauracao?>">
            </div>
            <div class="col-sm-12">
                <label>Tipo de Intervenção: </label>
                <textarea cols="100" rows="5" readonly="true" class="form-control" placeholder="<?php echo $restauracao->intervencao?>"></textarea><br>
            </div>
            
            <div class="col-sm-4">
                <!-- Botão para atualizar uma restauração -->
                <?php echo form_open('Obra_Controller/atualizar_restauracao/'.$id_obra.'/'.$restauracao->id_restauracao); ?>
                <button id="botao_atualizar" class="btn btn-default" type="submit" name="txt-restauracao" value=""><span class="oi oi-loop-circular"></span> Atualizar </button>
                <?php echo form_close();?>
                 <!-- FIM -->
            </div>
            <div class="col-sm-4">
                <!-- Botão para excluir uma restauração -->
                 <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
                 <button id="botao_excluir" class="btn btn-default" type="button" data-toggle="modal" data-target="#myModal"><span class="oi oi-trash"></span> Excluir</button>

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
                                <!-- Botão para excluir uma exposição -->
                                    <?php echo form_open('Obra_Controller/excluir_restauracao/'.$id_obra.'/'.$restauracao->id_restauracao); ?>
                                    <button type="submit" name="txt-visualizar" value="" class="btn btn-default"> Sim </button>
                                    <?php echo form_close();?>
                                                <!-- FIM -->
                                </div>
                                <div class="col-md-offset-2">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
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