  <?php
      foreach ($resultado as $obra){
      ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <!--  Botão para voltar para a pré-visualização  -->
        <?php echo form_open('pre_visualizacao_obra'); ?>
            <button class="btn btn-default" type="submit"> Voltar </button>
        <?php echo form_close();?>
        <!--  FIM  -->
      </div>

      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar de botões">
          <div class="btn-group mr-2" role="group">
            <!-- Inicio do codigo de Update -->
            <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
            <?php echo form_open('Obra_Controller/atualizar_obra/'.$obra->id_obra); ?>
              <!-- <input  type="hidden" name="txt-id" value="<?php echo $obra->id_obra ?>"/> -->
              <button class="btn btn-default btn-block" style="width: 170px" type="submit" name="txt-atualizar" value="">
              <span class="oi oi-pencil" aria-hidden="true" title="Editar"></span>
                Editar Obra
              </button>
            <?php echo form_close();?>
            <!-- Fim do codigo de Update -->
          </div>

          <div class="btn-group mr-2" role="group">
            <!-- Inicio do codigo de visualizar exposições -->
            <!-- Passa o id_obra para o form que será usado lá no controller para realizar a buscaBD -->
            <?php echo form_open('Obra_Controller/visualizar_exposicoes/'.$obra->id_obra); ?>
                <button style="width: 290px" class="btn btn-default btn-block" type="submit"> <span class="oi oi-home" aria-hidden="true" title="Esposições"></span> Visualizar exposições </button>
            <?php echo form_close();?>
            <!-- Fim do codigo de visualizar exposições -->
          </div>

          <div class="btn-group mr-2" role="group">
            <!-- Inicio do codigo de visualizar restaurações -->
            <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
            <?php echo form_open('Obra_Controller/visualizar_restauracoes/'.$obra->id_obra); ?>
                <button style="width: 290px" class="btn btn-default btn-block" type="submit"> <span class="oi oi-wrench" aria-hidden="true" title="Restaurações"></span> Visualizar restaurações </button>
            <?php echo form_close();?>
            <!-- Fim do codigo de visualizar restaurações -->
          </div>

          <div class="btn-group mr-2" role="group">
            <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
            <button style="width: 170px" class="btn btn-default btn-block" type="button" data-toggle="modal" data-target="#myModal"><span class="oi oi-trash" aria-hidden="true" title="Excluir"></span> Excluir obra</button>
          </div>
      </div>
    </div>
      

    <div class="row">
      
        <div class="col-md-12">
          <h1 class="text-center"> <?php echo "Obra ". $obra->nome_objeto ?> </h1><br>
        </div>

        <p>
            Id da Obra: <?php echo $obra->id_obra ?>
        </p> 
        <p>
           Numero atual: <?php echo $obra->num_atual ?>
        </p>
        <p>
           Número Anterior: <?php echo $obra->num_anterior ?>
        </p>
        <p>
           Fichas Relacionadas: <?php echo $obra->fichas_relacionadas ?>
        </p>
        <p>
           Nome do Objeto: <?php echo $obra->nome_objeto ?>
        </p> 
        <p>
           Título do Objeto: <?php echo $obra->titulo ?>
        </p> 
        <p>
           <?php echo $obra->classe ?>
        </p> 
        <p>
           <?php echo $obra->sub_classe ?>
        </p> 
        <p>
           <?php echo $obra->material ?>
        </p> 
        <p>
           <?php echo $obra->tecnica ?>
        </p> 
        <p>
           <?php echo $obra->inscricoes_marcas ?>
        </p> 
        <p>
           <?php echo $obra->epoca ?>
        </p> 
        <p>
           <?php echo $obra->autoria ?>
        </p>
        <p>
           <?php echo $obra->origem ?>
        </p>
        <p>
           <?php echo $obra->procedencia ?>
        </p>
        <p>
           <?php echo $obra->imagem ?>
        </p>
        <p>
           <?php echo $obra->conservacao ?>
        </p>
        <p>
           <?php echo $obra->localizacao ?>
        </p>
        <p>
           <?php echo $obra->altura ?>
        </p>
        <p>
           <?php echo $obra->largura ?>
        </p>
        <p>
           <?php echo $obra->comprimento ?>
        </p>
        <p>
           <?php echo $obra->profundidade ?>
        </p>
        <p>
           <?php echo $obra->diametro ?>
        </p>
        <p>
           <?php echo $obra->peso ?>
        </p>
        <p>
           <?php echo $obra->circunferencia ?>
        </p>
        <p>
           <?php echo $obra->resp_preenc_tec ?>
        </p>
        <p>
           <?php echo $obra->nome_fotografo ?>
        </p>
        <p>
           <?php echo $obra->resp_digitacao ?>
        </p>
        <p>
           <?php echo $obra->data_digitacao ?>
        </p>
        <p>
           <?php echo $obra->resp_revisao ?>
        </p>
        <p>
           <?php echo $obra->data_revisao ?>
        </p>
        <p>
           <?php echo $obra->resp_alteracao ?>
        </p>
        <p>
           <?php echo $obra->data_alteracao ?>
        </p>
        <p>
           <?php echo $obra->descricao_objeto ?>
        </p>
        <p>
           <?php echo $obra->carac_tecnica ?>
        </p>
        <p>
           <?php echo $obra->carac_inconografica ?>
        </p>
        <p>
           <?php echo $obra->carac_estilistica ?>
        </p>
        <p>
           <?php echo $obra->dados_historicos ?>
        </p>
        <p>
           <?php echo $obra->publicacao ?>
        </p>
        <p>
           <?php echo $obra->fontes_primarias ?>
        </p>
        <p>
           <?php echo $obra->fontes_bib ?>
        </p>
        <p>
           <?php echo $obra->modo_aquisicao ?>
        </p>
        <p>
           <?php echo $obra->data_aquisicao ?>
        </p>
        <p>
           <?php echo $obra->id_funcionario ?>
        </p>
      <?php
      }?>
    </div>
    <!-- Modal de exclusão de obra -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tem certeza que deseja excluir a obra?</h4>
                </div>

                <div class="modal-footer">
                    <div class="col-md-2">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <?php echo form_open('Obra_Controller/remover_obra/'.$obra->id_obra); ?>
                            <button type="submit" class="btn btn-primary"> Sim </button>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim modal de exclusão de obra -->
  </div>
    