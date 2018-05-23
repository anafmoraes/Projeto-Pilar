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

        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-6">
              Nome: <?php echo $obra->nome_objeto ?>
            </div> 
            <div class="col-sm-6">
              Título: <?php echo $obra->titulo ?>
            </div> 
            <div class="col-sm-6">
              Numero atual: <?php echo $obra->num_atual ?>
            </div>
            <div class="col-sm-6">
              Número Anterior: <?php echo $obra->num_anterior ?>
            </div>
            <div class="col-sm-12">
              Fichas Relacionadas: <?php echo $obra->fichas_relacionadas ?>  
            </div>  
            <div class="col-sm-6">
              Classe do objeto: <?php echo $obra->classe ?>
            </div>

            <div class="col-sm-6">
              Sub-classe do objeto: <?php echo $obra->sub_classe ?>
            </div>

            <div class="col-sm-6">
              Material: <?php echo $obra->material ?>
            </div>

            <div class="col-sm-6">
              Técnica:<?php echo $obra->tecnica ?>
            </div>

            <div class="col-sm-6">
              Instrições das marcas: <?php echo $obra->inscricoes_marcas ?>
            </div>

            <div class="col-sm-6">
              Época: <?php echo $obra->epoca ?>
            </div>

            <div class="col-sm-6">
              Autoria: <?php echo $obra->autoria ?>
            </div>

            <div class="col-sm-6">
              Origem: <?php echo $obra->origem ?>
            </div>

            <div class="col-sm-6">
              Procedência: <?php echo $obra->procedencia ?>
            </div>

            <div class="col-sm-6">
               Conservação: <?php echo $obra->conservacao ?>
            </div>

            <div class="col-sm-12">
              Localização: <?php echo $obra->localizacao ?>
            </div>

            <div class="col-sm-6">
              Altura: <?php echo $obra->altura ?>
            </div>

            <div class="col-sm-6">
              Largura: <?php echo $obra->largura ?>
            </div>

            <div class="col-sm-6">
              Comprimento: <?php echo $obra->comprimento ?>
            </div>

            <div class="col-sm-6">
              Profundidade: <?php echo $obra->profundidade ?>
            </div>

            <div class="col-sm-6">
              Diâmetro: <?php echo $obra->diametro ?>
            </div>

            <div class="col-sm-6">
              Peso: <?php echo $obra->peso ?>
            </div>

            <div class="col-sm-6">
              Circunferência: <?php echo $obra->circunferencia ?>
            </div>

            <div class="col-sm-12">
              Técnico Responsável pelo preenchimento<?php echo $obra->resp_preenc_tec ?>
            </div>

            <div class="col-sm-12">
              Nome do fotógrafo: <?php echo $obra->nome_fotografo ?>
            </div>

            <div class="col-sm-12">
              Responsável pela digitação: <?php echo $obra->resp_digitacao ?>
            </div>

            <div class="col-sm-6">
              
            </div>

            <div class="col-sm-6">
              
            </div>

            <div class="col-sm-6">
              
            </div>

          </div>
        </div>

        <div class="col-md-offset-7">
          <div class="row">
            <img src="<?php echo base_url('/assets/img/default-image.png');?>" class="img-fluid" width=500px>
          </div>
          <br>
          <div class="row">
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
          
          
          
          
          
          Data da digitação: <?php echo $obra->data_digitacao ?>
          Responsável pela revisão: <?php echo $obra->resp_revisao ?>
          Data da revisão: <?php echo $obra->data_revisao ?>
          Responsável pela alteração: <?php echo $obra->resp_alteracao ?>
          Data da alteração: <?php echo $obra->data_alteracao ?>
          Descrição do objeto: <?php echo $obra->descricao_objeto ?>
          Características técnicas: <?php echo $obra->carac_tecnica ?>
          Características inconográficas:<?php echo $obra->carac_inconografica ?>
          Características estilisticas<?php echo $obra->carac_estilistica ?>
          Dados históricos<?php echo $obra->dados_historicos ?>
          Publicação: <?php echo $obra->publicacao ?>
          Fontes primárias: <?php echo $obra->fontes_primarias ?>
          Fontes bibliográficas: <?php echo $obra->fontes_bib ?>
          Modo de aquisição: <?php echo $obra->modo_aquisicao ?>
          Data da aquisição: <?php echo $obra->data_aquisicao ?>
        
          Responsável pelo cadastro:
          <?php 
            $this->db->where('id_funcionario', $obra->id_funcionario);
            $query = $this->db->get('funcionario');
            foreach ($query->result() as $row) 
            {
                $nomefunc = $row->nome;
                
            }

           echo $nomefunc ?>
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
    
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
  $('.carousel').carousel({
    interval:500
  })
</script>