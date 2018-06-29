<body id="corpo">
  <?php
      foreach ($resultado as $obra){
      ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <!--  Botão para voltar para a pré-visualização  -->
        <?php echo form_open('pre_visualizacao_obra'); ?>
            <button class="btn btn-default" type="submit" id="botao_voltar"> Voltar </button>
        <?php echo form_close();?>
        <!--  FIM  -->
      </div>
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar de botões" id="alinhar_direita">
          <div class="btn-group mr-2" role="group">
            <!-- Inicio do codigo de Update -->
            <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
            <?php echo form_open('Obra_Controller/atualizar_obra/'.$obra->id_obra); ?>
              <!-- <input  type="hidden" name="txt-id" value="<?php echo $obra->id_obra ?>"/> -->
              <button class="btn btn-default btn-block" id="botao_115" type="submit" name="txt-atualizar" value="">
              <span class="oi oi-pencil" aria-hidden="true" title="Editar"></span>
                Editar
              </button>
            <?php echo form_close();?>
            <!-- Fim do codigo de Update -->
          </div>
          <div class="btn-group mr-2" role="group">
            <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
            <button id="botao_115" class="btn btn-default btn-block" type="button" data-toggle="modal" data-target="#myModal"><span class="oi oi-trash" aria-hidden="true" title="Excluir"></span> Excluir</button>
          </div>
          <br>
          <div class="btn-group" role="group" id="alinhar_direita">
              <!-- Inicio do codigo de visualizar exposições -->
              <!-- Passa o id_obra para o form que será usado lá no controller para realizar a buscaBD -->
              <?php echo form_open('Obra_Controller/visualizar_exposicoes/'.$obra->id_obra); ?>
                  <button id="botao_230" class="btn btn-default btn-block" type="submit"> <span class="oi oi-home" aria-hidden="true" title="Esposições"></span> Exposições </button>
              <?php echo form_close();?>
              <!-- Fim do codigo de visualizar exposições -->   
            </div>
            <br>
            <div class="btn-group" role="group" id="alinhar_direita">
              <!-- Inicio do codigo de visualizar restaurações -->
              <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
              <?php echo form_open('Obra_Controller/visualizar_restauracoes/'.$obra->id_obra); ?>
                  <button id="botao_230" class="btn btn-default btn-block" type="submit"> <span class="oi oi-wrench" aria-hidden="true" title="Restaurações"></span> Restaurações </button>
              <?php echo form_close();?>
              <!-- Fim do codigo de visualizar restaurações -->

              <!-- Inicio do codigo de visualizar galeria -->
              <!-- Passa o id_obra para o form que será usado lá no controller para realizar a buscaBD -->
              <?php echo form_open('Obra_Controller/galeria/'.$obra->id_obra); ?>
                  <button id="botao_230" class="btn btn-default btn-block" type="submit"> <span class="oi oi-home" aria-hidden="true" title="Esposições"></span> Galeria </button>
              <?php echo form_close();?>
              <!-- Fim do codigo de visualizar galeria -->
            </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"> <?php echo "Obra ". $obra->nome_objeto ?> </h1><br>
        </div>
    </div>

    <div class="row" id="caixa2">
      <label> LOCALIZAÇÃO NA PLANTA DO BEM IMÓVEL</label><br>
      <div class="row">
        <div class="col-sm-12"> 
        <textarea type="text" class="form-control" readonly="true" placeholder="<?php echo $obra->localizacao ?>"></textarea>
        </div>
      </div>
      
    <br><br>

      <label> IDENTIFICAÇÃO DO BEM</label><br>
      <div class="row">
        <div class="col-sm-4">
          <b>Numero atual: </b>
          <input readonly="true" class="form-control" placeholder="<?php echo $obra->num_atual ?>">
        </div>

        <div class="col-sm-4"><b>Objeto: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->nome_objeto ?>"></div>
        <div class="col-sm-4"><b>Título: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->titulo ?>"></div>
          
        <div class="col-sm-6"><b>Classe do objeto (thesaurus): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->classe ?>"></div>
        <div class="col-sm-6"><b>Sub-classe do objeto (thesaurus): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->sub_classe ?>"></div>

        <div class="col-sm-6"><b>Material (tabela): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->material ?>"></div>
        <div class="col-sm-6"><b>Técnica (tabela): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->tecnica ?>"></div>
      </div>

    <br><br>

      <label> DIMENSÕES:</label><br>
      <div class="row">
        <div class="col-sm-3">
          <b>Altura (cm): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->altura ?>">
        </div>

        <div class="col-sm-3">
          <b>Largura (cm): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->largura ?>">
        </div>

        <div class="col-sm-3">
          <b>Comprimento (cm): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->comprimento ?>">
        </div>

        <div class="col-sm-3">
          <b>Profundidade (cm): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->profundidade ?>">
        </div>

        <div class="col-sm-3">
          <b>Diâmetro (cm): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->diametro ?>">
        </div>

        <div class="col-sm-3">
          <b>Peso (kg): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->peso ?>">
        </div>

        <div class="col-sm-3">
          <b>Circunferência (cm): </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->circunferencia ?>">
        </div>
      </div>

    <br><br>

      <div class="row">
        <div class="col-sm-6"><b>Inscrições/marcas: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->inscricoes_marcas ?>"></div>
        <div class="col-sm-6"><b>Época: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->epoca ?>"></div>
        <div class="col-sm-6"><b>Autoria: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->autoria ?>"></div>
        <div class="col-sm-6"><b>Origem: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->origem ?>"></div>
        <div class="col-sm-6"><b>Procedência: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->procedencia ?>"></div>
      </div>
      

    <br><br>

      <label>AQUISIÇÃO DA OBRA</label>
      <div class="row">
        <div class="col-sm-3">
          <b>Modo de aquisição: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->modo_aquisicao ?>">
        </div>
        <div class="col-sm-3">
          <b>Data da aquisição: </b><input readonly="true"class="form-control"  class="form-control" placeholder="<?php echo date('d/m/Y',  strtotime($obra->data_aquisicao)) ?>">
        </div>
      </div>

    <br><br>
      
      <label> CONSERVAÇÃO DO OBJETO</label>
      <div class="row">
        <div class="col-sm-3"><b>Estado de conservação: </b> <input readonly="true" class="form-control" placeholder="<?php echo $obra->conservacao ?>"></div>
       
      </div>
      
    <br><br>

      <label> ANÁLISE</label>
      <div class="row">
        <div class="col-sm-12"><b>Descrição do objeto: </b><textarea rows="5" readonly="true" class="form-control" placeholder="<?php echo $obra->descricao_objeto ?>"></textarea></div>
        <div class="col-sm-12"><b>Características técnicas: </b><textarea rows="5" readonly="true" class="form-control" placeholder="<?php echo $obra->carac_tecnica ?>"></textarea></div>
        <div class="col-sm-12"><b>Características inconográficas: </b><textarea rows="5" readonly="true" class="form-control" placeholder="<?php echo $obra->carac_inconografica ?>"></textarea></div>
        <div class="col-sm-12"><b>Características estilisticas: </b><textarea rows="5" readonly="true" class="form-control" placeholder="<?php echo $obra->carac_estilistica ?>"></textarea></div>
        <div class="col-sm-12"><b>Dados históricos: </b><textarea rows="5" readonly="true" class="form-control" placeholder="<?php echo $obra->dados_historicos ?>"></textarea></div>
      </div>

    <br><br>

      <label> OBSERVAÇÕES</label>
      <div class="row">
        <div class="col-sm-12">
          <b>Publicação:  </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->publicacao ?>">
        </div>

        <div class="col-sm-12">
          <b>Fontes primárias:  </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->fontes_primarias ?>">
        </div>

        <div class="col-sm-12">
          <b>Fontes bibliográficas: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->fontes_bib ?>">
        </div>
      </div>

      <br><br>

      <label> PRENCHIMENTO TÉCNICO</label>
      <div class="row">
        <div class="col-sm-12"><b>Técnico Responsável pelo preenchimento técnico: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->resp_preenc_tec ?>"></div>
          <div class="col-sm-12"><b>Nome do fotógrafo: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->nome_fotografo ?>"></div>
          
          <div class="col-sm-6"><b>Responsável pela digitação: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->resp_digitacao ?>"></div>
          <div class="col-sm-offset-6">
            <b> Data da digitação: </b><input readonly="true" class="form-control" placeholder="<?php echo date('d/m/Y',  strtotime($obra->data_digitacao)) ?>">
          </div>
          
          <div class="col-sm-6"><b>Responsável pela revisão: </b> <input readonly="true" class="form-control" placeholder="<?php echo $obra->resp_revisao ?>"></div>
          <div class="col-sm-offset-6">
            <b>Data da revisão:  </b><input readonly="true" class="form-control" placeholder="<?php echo date('d/m/Y',  strtotime($obra->data_revisao)) ?>">
          </div>
          
          <div class="col-sm-6"><b>Responsável pela alteração: </b><input readonly="true" class="form-control" placeholder="<?php echo $obra->resp_alteracao ?>"></div>
          <div class="col-sm-offset-6">
            <b>Data da alteração: </b><input readonly="true" class="form-control" placeholder="<?php echo date('d/m/Y',  strtotime($obra->data_alteracao)) ?>">
          </div>
        
           <div class="col-sm-6">
            

            <b>Usuario que Cadastrou a Obra: </b>
            <?php  foreach ($usuario_cadastro as $cadastrou){ ?>
              
            <input readonly="true" class="form-control" placeholder="<?php  echo $cadastrou->nome ?>">
            
            <?php } ?>
          </div>
            
        </div>
      </div>
    <?php } ?>
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
                        <?php echo form_open('Obra_Controller/exclusao_logica/'.$obra->id_obra); ?>
                            <button type="submit" class="btn btn-default"> Sim </button>
                        <?php echo form_close();?>
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