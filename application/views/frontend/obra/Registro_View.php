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

    <div class="row" id="caixa">
      <div class="col-md-6" id="linha_direita"> 
        <label> FOTOS</label><br>
        <img src="<?php echo base_url('/assets/img/default-image.png');?>" class="img-fluid" width=550px>
          <br><br>
      </div>
      <div class="col-sm-6" id="borda_direita"> 
        <label> LOCALIZAÇÃO NA PLANTA DO BEM IMÓVEL</label><br>
        <?php echo $obra->localizacao ?>
      </div>
    </div>

    <div class="row" id="caixa">
      <div class="col-sm-12">     
        <label> IDENTIFICAÇÃO DO BEM</label><br>
        <b>Numero atual: </b><?php echo $obra->num_atual ?><br>
        <!--<b>Número Anterior:</b> <?php echo $obra->num_anterior ?><br>-->
        <!-- <b><b>Fichas Relacionadas: </b><?php echo $obra->fichas_relacionadas ?><br> -->

        <br>

        Objeto: </b><?php echo $obra->nome_objeto ?><br>
        <b>Título: </b><?php echo $obra->titulo ?><br>

        <br>
          
        <b>Classe do objeto (thesaurus): </b><?php echo $obra->classe ?><br>
        <b>Sub-classe do objeto (thesaurus): </b><?php echo $obra->sub_classe ?><br>

        <br>

        <b>Material (tabela): </b><?php echo $obra->material ?><br>
        <b>Técnica (tabela): </b><?php echo $obra->tecnica ?><br>

        <br>

        <label> DIMENSÕES:</label><br>
        <div class="col-sm-3">
          <b>Altura (cm): </b><?php echo $obra->altura ?>
        </div>

        <div class="col-sm-3">
          <b>Largura (cm): </b><?php echo $obra->largura ?>
        </div>

        <div class="col-sm-3">
          <b>Comprimento (cm): </b><?php echo $obra->comprimento ?>
        </div>

        <div class="col-sm-3">
          <b>Profundidade (cm): </b><?php echo $obra->profundidade ?>
        </div>

        <div class="col-sm-3">
          <b>Diâmetro (cm): </b><?php echo $obra->diametro ?>
        </div>

        <div class="col-sm-3">
          <b>Peso (kg): </b><?php echo $obra->peso ?>
        </div>

        <div class="col-sm-3">
          <b>Circunferência (cm): </b><?php echo $obra->circunferencia ?>
        </div>

        <br><br><br>

        <b>Instrições/marcas: </b><?php echo $obra->inscricoes_marcas ?><br>
        <b>Época: </b><?php echo $obra->epoca ?><br>
        <b>Autoria: </b><?php echo $obra->autoria ?><br>
        <b>Origem: </b><?php echo $obra->origem ?><br>
        <b>Procedência: </b><?php echo $obra->procedencia ?>
      </div>
    </div>
    
    <div class="row" id="caixa">
      
    </div>

    <div class="row" id="caixa">
      <div class="col-md-12">
        <label> MODO DE AQUISIÇÃO</label><br>
        <div class="col-sm-3">
          <?php 
          if ($obra->modo_aquisicao == "Compra") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Compra";
          ?>
        </div>
        <div class="col-sm-3">
          <?php
            if ($obra->modo_aquisicao == "Doação") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Doação";
          ?>
        </div>
        <div class="col-sm-3">
          <?php
            if ($obra->modo_aquisicao == "Permuta") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Permuta";
          ?>
        </div>
        <div class="col-sm-3">
          <?php
            if ($obra->modo_aquisicao == "Consignação") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Consignação";
          ?>
        </div>

        <div class="col-sm-12">
          <b>Data da aquisição: </b><?php echo $obra->data_aquisicao ?>
        </div>
      </div>
    </div>
    
    <div class="row" id="caixa">
      <div class="col-sm-12">
        <label> CONSERVAÇÃO DO OBJETO</label><br>
        <div class="col-sm-12">
          <div class="col-sm-3">Estado de conservação: </div>
          <div class="col-sm-3">
          <?php 
          if ($obra->conservacao == "Bom") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Bom";
          ?>
        </div>
        <div class="col-sm-3">
          <?php
            if ($obra->conservacao == "Regular") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Regular";
          ?>
        </div>
        <div class="col-sm-3">
          <?php
            if ($obra->conservacao == "Ruim") { ?>

            <span class="oi oi-task"></span>
            <?php 
            }
            echo "Ruim";
          ?>
        </div>
        </div>
      </div>
    </div>

    <div class="row justify-content" id="caixa">
      <div class="col-sm-12">
        <label> ANÁLISE</label><br>
        <b>Descrição do objeto: </b><?php echo $obra->descricao_objeto ?><br>
        <b>Características técnicas: </b><?php echo $obra->carac_tecnica ?><br>
        <b>Características inconográficas: </b><?php echo $obra->carac_inconografica ?><br>
        <b>Características estilisticas: </b><?php echo $obra->carac_estilistica ?><br>
        <b>Dados históricos: </b><?php echo $obra->dados_historicos ?><br>
      </div>
    </div>

      <div class="row" id="caixa">
        <div class="col-sm-12">
          <label> OBSERVAÇÕES</label><br>
          <b>Publicação:  </b><?php echo $obra->publicacao ?>
        </div>

        <div class="col-sm-12">
          <b>Fontes primárias:  </b><?php echo $obra->fontes_primarias ?>
        </div>

        <div class="col-sm-12">
          <b>Fontes bibliográficas: </b><?php echo $obra->fontes_bib ?>
        </div>
      </div>

      <div class="row" id="caixa">
        <div class="col-sm-12">
          <label> Preenchimento técnico</label><br>

          <b>Técnico Responsável pelo preenchimento técnico: </b><?php echo $obra->resp_preenc_tec ?><br>
          <b>Nome do fotógrafo: </b><?php echo $obra->nome_fotografo ?><br>
          
          <div class="col-sm-6"><b>Responsável pela digitação: </b><?php echo $obra->resp_digitacao ?></div>
          <div class="col-sm-offset-6">
            <b> Data da digitação: </b><?php echo $obra->data_digitacao ?>
          </div>
          
          <div class="col-sm-6"><b>Responsável pela revisão: </b> <?php echo $obra->resp_revisao ?></div>
          <div class="col-sm-offset-6">
            <b>Data da revisão:  </b><?php echo $obra->data_revisao ?>
          </div>
          
          <div class="col-sm-6"><b>Responsável pela alteração: </b><?php echo $obra->resp_alteracao ?></div>
          <div class="col-sm-offset-6">
            <b>Data da alteração: </b><?php echo $obra->data_alteracao ?>
          </div>
          
        </div>
      </div>
      <?php } ?>
    </div>

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
                        <?php echo form_open('Obra_Controller/remover_obra/'.$obra->id_obra); ?>
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