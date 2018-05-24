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
      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar de botões" style="float: right;">
          <div class="btn-group mr-2" role="group">
            <!-- Inicio do codigo de Update -->
            <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
            <?php echo form_open('Obra_Controller/atualizar_obra/'.$obra->id_obra); ?>
              <!-- <input  type="hidden" name="txt-id" value="<?php echo $obra->id_obra ?>"/> -->
              <button class="btn btn-default btn-block" style="width: 120px" type="submit" name="txt-atualizar" value="">
              <span class="oi oi-pencil" aria-hidden="true" title="Editar"></span>
                Editar
              </button>
            <?php echo form_close();?>
            <!-- Fim do codigo de Update -->
          </div>
          <div class="btn-group mr-2" role="group">
            <!-- Botão de exclusão que chama um modal para verificar se o usuário deseja mesmo excluir a obra-->
            <button style="width: 120px" class="btn btn-default btn-block" type="button" data-toggle="modal" data-target="#myModal"><span class="oi oi-trash" aria-hidden="true" title="Excluir"></span> Excluir</button>
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"> <?php echo "Obra ". $obra->nome_objeto ?> </h1><br>
        </div>
        <div class="col-md-12">     
          <div class="row" id="caixa">
            <label> Localização:</label><br>
            <div class="col-sm-12">
              <?php echo $obra->localizacao ?>
            </div>
          </div><br>

          <div class="row" id="caixa">
            <label> Identificação do bem:</label><br>
            <div class="col-sm-3">
              <b>Nome: </b><?php echo $obra->nome_objeto ?>
            </div> 
            <div class="col-sm-3">
              <b>Título: </b><?php echo $obra->titulo ?>
            </div> 
            <div class="col-sm-3">
              <b>Numero atual: </b><?php echo $obra->num_atual ?>
            </div>
            <div class="col-sm-3">
              <b>Número Anterior:</b> <?php echo $obra->num_anterior ?>
            </div>
            <div class="col-sm-3">
              <b>Fichas Relacionadas: </b><?php echo $obra->fichas_relacionadas ?>  
            </div>  
            <div class="col-sm-3">
              <b>Classe do objeto: </b><?php echo $obra->classe ?>
            </div>

            <div class="col-sm-3">
              <b>Sub-classe do objeto: </b><?php echo $obra->sub_classe ?>
            </div>

            <div class="col-sm-3">
              <b>Material: </b><?php echo $obra->material ?>
            </div>

            <div class="col-sm-3">
              <b>Técnica: </b><?php echo $obra->tecnica ?>
            </div>

            <div class="col-sm-3">
              <b>Instrições/marcas: </b><?php echo $obra->inscricoes_marcas ?>
            </div>

            <div class="col-sm-3">
              <b>Época: </b><?php echo $obra->epoca ?>
            </div>

            <div class="col-sm-3">
              <b>Autoria: </b><?php echo $obra->autoria ?>
            </div>

            <div class="col-sm-3">
              <b>Origem: </b><?php echo $obra->origem ?>
            </div>

            <div class="col-sm-3">
              <b>Procedência: </b><?php echo $obra->procedencia ?>
            </div>

            <div class="col-sm-3">
              <b>Conservação: </b><?php echo $obra->conservacao ?>
            </div>
          </div><br>

          <div class="row" id="caixa">
            <label> Dimensões:</label><br>
            <div class="col-sm-3">
              <b>Altura: </b><?php echo $obra->altura ?>
            </div>

            <div class="col-sm-3">
              <b>Largura: </b><?php echo $obra->largura ?>
            </div>

            <div class="col-sm-3">
              <b>Comprimento: </b><?php echo $obra->comprimento ?>
            </div>

            <div class="col-sm-3">
              <b>Profundidade: </b><?php echo $obra->profundidade ?>
            </div>

            <div class="col-sm-3">
              <b>Diâmetro: </b><?php echo $obra->diametro ?>
            </div>

            <div class="col-sm-3">
              <b>Peso: </b><?php echo $obra->peso ?>
            </div>

            <div class="col-sm-3">
              <b>Circunferência: </b><?php echo $obra->circunferencia ?>
            </div>
          </div><br>

          <div class="row" id="caixa">
            <label> Análise:</label><br>
            <div class="col-sm-12">
              <b>Descrição do objeto: </b><?php echo $obra->descricao_objeto ?>
            </div>

            <div class="col-sm-12">
              <b>Características técnicas: </b><?php echo $obra->carac_tecnica ?>
            </div>

            <div class="col-sm-12">
              <b>Características inconográficas: </b><?php echo $obra->carac_inconografica ?>
            </div>

            <div class="col-sm-12">
              <b>Características estilisticas: </b><?php echo $obra->carac_estilistica ?>
            </div>

            <div class="col-sm-12">
              <b>Dados históricos: </b><?php echo $obra->dados_historicos ?>
            </div>
          </div><br>

          <div class="row" id="caixa">
            <label> Observações</label><br>
            <div class="col-sm-6">
              <b>Publicação:  </b><?php echo $obra->publicacao ?>
            </div>

            <div class="col-sm-6">
              <b>Fontes primárias:  </b><?php echo $obra->fontes_primarias ?>
            </div>

            <div class="col-sm-6">
              <b>Fontes bibliográficas: </b><?php echo $obra->fontes_bib ?>
            </div>

            <div class="col-sm-6">
              <b>Modo de aquisição: </b><?php echo $obra->modo_aquisicao ?>
            </div>

            <div class="col-sm-6">
              <b>Data da aquisição: </b><?php echo $obra->data_aquisicao ?>
            </div>
          </div><br>

          <div class="row" id="caixa">
            <label> Preenchimento técnico</label><br>
            <div class="col-sm-12">
              <b>Técnico Responsável pelo preenchimento técnico: </b><?php echo $obra->resp_preenc_tec ?>
            </div>

            <div class="col-sm-12">
              <b>Nome do fotógrafo: </b><?php echo $obra->nome_fotografo ?>
            </div>

            <div class="col-sm-5">
              <b>Responsável pela digitação: </b><?php echo $obra->resp_digitacao ?>
            </div>

            <div class="col-sm-5">
              <b> Data da digitação: </b><?php echo $obra->data_digitacao ?>
            </div>

            <div class="col-sm-5">
              <b>Responsável pela revisão: </b> <?php echo $obra->resp_revisao ?>
            </div>

            <div class="col-sm-5">
              <b>Data da revisão:  </b><?php echo $obra->data_revisao ?>
            </div>

            <div class="col-sm-5">
              <b>Responsável pela alteração: </b><?php echo $obra->resp_alteracao ?>
            </div>

            <div class="col-sm-5">
              <b>Data da alteração: </b><?php echo $obra->data_alteracao ?>
            </div>
            <div class="col-sm-12">
              <b>Responsável pelo cadastro: </b>
              <?php 
                $this->db->where('id_funcionario', $obra->id_funcionario);
                $query = $this->db->get('funcionario');
                foreach ($query->result() as $row) 
                {
                    $nomefunc = $row->nome;
                    
                }
                  echo $nomefunc;

                } ?>
            </div>
          </div><br>
        </div>

      </div>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
            <img src="<?php echo base_url('/assets/img/default-image.png');?>" class="img-fluid" width=550px>
          <br><br>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar de botões">
            <div class="btn-group mr-2" role="group">
              <!-- Inicio do codigo de visualizar exposições -->
              <!-- Passa o id_obra para o form que será usado lá no controller para realizar a buscaBD -->
              <?php echo form_open('Obra_Controller/visualizar_exposicoes/'.$obra->id_obra); ?>
                  <button style="width: 190px" class="btn btn-default btn-block" type="submit"> <span class="oi oi-home" aria-hidden="true" title="Esposições"></span> Exposições </button>
              <?php echo form_close();?>
              <!-- Fim do codigo de visualizar exposições -->
            </div>
            <div class="btn-group mr-2" role="group" style="float: right;">
              <!-- Inicio do codigo de visualizar restaurações -->
              <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD -->
              <?php echo form_open('Obra_Controller/visualizar_restauracoes/'.$obra->id_obra); ?>
                  <button style="width: 190px" class="btn btn-default btn-block" type="submit"> <span class="oi oi-wrench" aria-hidden="true" title="Restaurações"></span> Restaurações </button>
              <?php echo form_close();?>
              <!-- Fim do codigo de visualizar restaurações -->
            </div>
          </div>
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
    
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  $('.carousel').carousel({
    interval:500
  })
</script>