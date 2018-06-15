<div class="container">
    <div class="row">
        <!-- Botão para voltar a visualização da obra -->
        <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
            <button id="botao_voltar" type="submit" class="btn btn-default"> Voltar </button>
        <?php echo form_close();?>
        <!-- FIM -->
        
    </div>
    <div class="row">
        <h2 class="text-center"> Atualizar obra </h2>
        <?php if(isset($error)):?>
            <div><?=$error?></div>
        <?php endif;?>

        <div>
            <?php
            foreach ($resultado as $obra) {?>

                <?php
                echo validation_errors('<div class="alert alert-danger">','</div>');
                // Passa o id da obra que será atualizada para o controller usar
                echo form_open('Obra_Controller/salvar_atualizacao/'.$obra->id_obra);
                ?>
                    <!-- Passa o id da obra que será atualizada para o controller usar-->
                    <!--<input type="hidden" id="txt-id" name="id-obra" class="form-control" value="<?php echo $obra->id_obra ?>">-->


                    <div class="row" id="caixa">
                      <label> LOCALIZAÇÃO NA PLANTA DO BEM IMÓVEL</label><br>
                      <div class="row">
                        <div class="col-sm-12"> 
                        <input type="text" id="localizacao" name="localizacao" class="form-control" placeholder="Digite a localização do objeto" value="<?php echo $obra->localizacao ?>">
                        </div>
                      </div>
                      
                    <br><br>

                      <label> IDENTIFICAÇÃO DO BEM</label><br>
                      <div class="row">
                        <div class="col-sm-4">
                          <b>Numero atual: </b>
                         <input type="text" id="numero-atual" name="numero-atual" class="form-control" placeholder="Digite o número atual" value="<?php echo $obra->num_atual?>">
                        </div>
                        <div class="col-sm-4">
                          <b>Número Anterior:</b> <input type="text" id="numero-anterior" name="numero-anterior" class="form-control" placeholder="Digite o número anterior" value="<?php echo $obra->num_anterior ?>">
                        </div>
                        <div class="col-sm-4">
                          <b>Fichas Relacionadas: </b><input type="text" id="fichas-relacionadas" name="fichas-relacionadas" class="form-control" placeholder="Digite as fichas relacionadas" value="<?php echo $obra->fichas_relacionadas ?>">
                        </div>

                        <br>
                        
                        <div class="col-sm-4"><b>Objeto: </b><input type="text" id="nome-objeto" name="nome-objeto" class="form-control" placeholder="Digite o nome do objeto" value="<?php echo $obra->nome_objeto ?>"></div>
                        <div class="col-sm-4"><b>Título: </b><input type="text" id="titulo" name="titulo" class="form-control" placeholder="Digite o título" value="<?php echo $obra->titulo ?>"></div>

                        <br>
                          
                        <div class="col-sm-6"><b>Classe do objeto (thesaurus): </b><input type="text" id="classe" name="classe" class="form-control" placeholder="Digite a classe do objeto" value="<?php echo $obra->classe ?>"></div>
                        <div class="col-sm-6"><b>Sub-classe do objeto (thesaurus): </b><input type="text" id="sub-classe" name="sub-classe" class="form-control" placeholder="Digite a sub-classe do objeto" value="<?php echo $obra->sub_classe ?>"></div>
                        <br>

                        <div class="col-sm-6"><b>Material (tabela): </b><input type="text" id="material" name="material" class="form-control" placeholder="Digite o material do objeto" value="<?php echo $obra->material ?>"></div>
                        <div class="col-sm-6"><b>Técnica (tabela): </b><input type="text" id="tecnica" name="tecnica" class="form-control" placeholder="Digite a técnica" value="<?php echo $obra->tecnica ?>"><br></div>
                      </div>

                    <br><br>

                    <label> DIMENSÕES:</label><br>
                      <div class="row">
                        <div class="col-sm-3">
                          <b>Altura (cm): </b><input type="text" id="altura" name="altura" class="form-control" placeholder="Digite a altura do objeto" value="<?php echo $obra->altura ?>">
                        </div>

                        <div class="col-sm-3">
                          <b>Largura (cm): </b><input type="text" id="largura" name="largura" class="form-control" placeholder="Digite a largura do objeto" value="<?php echo $obra->largura ?>">
                        </div>

                        <div class="col-sm-3">
                          <b>Comprimento (cm): </b><input type="text" id="comprimento" name="comprimento" class="form-control" placeholder="Digite o comprimento do objeto" value="<?php echo $obra->comprimento ?>">
                        </div>

                        <div class="col-sm-3">
                          <b>Profundidade (cm): </b><input type="text" id="profundidade" name="profundidade" class="form-control" placeholder="Digite a profundidade do objeto" value="<?php echo $obra->profundidade ?>">
                        </div>

                        <div class="col-sm-3">
                          <b>Diâmetro (cm): </b><input type="text" id="diametro" name="diametro" class="form-control" placeholder="Digite o diâmetro do objeto" value="<?php echo $obra->diametro ?>">
                        </div>

                        <div class="col-sm-3">
                          <b>Peso (kg): </b><input type="text" id="peso" name="peso" class="form-control" placeholder="Digite o peso do objeto" value="<?php echo $obra->peso ?>">
                        </div>

                        <div class="col-sm-3">
                          <b>Circunferência (cm): </b><input type="text" id="circunferencia" name="circunferencia" class="form-control" placeholder="Digite a circunferência do objeto" value="<?php echo $obra->circunferencia ?>">
                        </div>
                      </div>

                    <br><br>

                      <div class="row">
                        <div class="col-sm-6"><b>Inscrições/marcas: </b><input type="text" id="inscricoes-marcas" name="inscricoes-marcas" class="form-control" placeholder="Digite as inscrições ou marcas" value="<?php echo $obra->inscricoes_marcas ?>"></div>
                        <div class="col-sm-6"><b>Época: </b><input type="text" id="epoca" name="epoca" class="form-control" placeholder="Digite a época" value="<?php echo $obra->epoca ?>"></div>
                        <div class="col-sm-6"><b>Autoria: </b><input type="text" id="autoria" name="autoria" class="form-control" placeholder="Digite o autor" value="<?php echo $obra->autoria ?>"></div>
                        <div class="col-sm-6"><b>Origem: </b><input type="text" id="origem" name="origem" class="form-control" placeholder="Digite a origem do objeto" value="<?php echo $obra->origem ?>"></div>
                        <div class="col-sm-6"><b>Procedência: </b><input type="text" id="procedencia" name="procedencia" class="form-control" placeholder="Digite a procedência do objeto" value="<?php echo $obra->procedencia ?>"></div>
                      </div>
                      
                    <br><br>

                      <label>AQUISIÇÃO DA OBRA</label>
                      <div class="row">
                        <div class="col-sm-3">
                          <b>Modo de aquisição: </b><input type="text" id="modo-aquisicao" name="modo-aquisicao" class="form-control" placeholder="Modo de aquisição" value="<?php echo $obra->modo_aquisicao ?>">
                        </div>
                        <div class="col-sm-3">
                          <b>Data da aquisição: </b><input type="date" id="data-aquisicao" name="data-aquisicao" class="form-control"  value="<?php echo $obra->data_aquisicao ?>">
                        </div>
                      </div>

                    <br><br>
                      
                      <label> CONSERVAÇÃO DO OBJETO</label>
                      <div class="row">
                        <div class="col-sm-3"><b>Estado de conservação: </b> <input type="text" id="conservacao" name="conservacao" class="form-control" placeholder="Digite o estado de conservação do objeto" value="<?php echo $obra->conservacao ?>"></div>
                       
                      </div>
                      
                    <br><br>

                      <label> ANÁLISE</label>
                      <div class="row">
                        <div class="col-sm-12"><b>Descrição do objeto: </b><input type="text" id="descricao-objeto" name="descricao-objeto" class="form-control" placeholder="Insira uma descrição para o objeto" value="<?php echo $obra->descricao_objeto ?>"></div>
                        <div class="col-sm-12"><b>Características técnicas: </b><input type="text" id="carac-tecnicas" name="carac-tecnicas" class="form-control" placeholder="Insira as características técnicas" value="<?php echo $obra->carac_tecnica ?>"></div>
                        <div class="col-sm-12"><b>Características inconográficas: </b><input type="text" id="carac-inconografica" name="carac-inconografica" class="form-control" placeholder="Insira as características inconográficas" value="<?php echo $obra->carac_inconografica ?>"></div>
                        <div class="col-sm-12"><b>Características estilisticas: </b><input type="text" id="carac-estilisticas" name="carac-estilisticas" class="form-control" placeholder="Insira as características estilísticas" value="<?php echo $obra->carac_estilistica ?>"></div>
                        <div class="col-sm-12"><b>Dados históricos: </b><input type="text" id="dados-historicos" name="dados-historicos" class="form-control" placeholder="Insira os dados históricos" value="<?php echo $obra->dados_historicos ?>"></div>
                      </div>

                    <br><br>

                      <label> OBSERVAÇÕES</label>
                      <div class="row">
                        <div class="col-sm-12">
                          <b>Publicação:  </b><input type="text" id="publicacao" name="publicacao" class="form-control" placeholder="Insira as publicações" value="<?php echo $obra->publicacao ?>">
                        </div>

                        <div class="col-sm-12">
                          <b>Fontes primárias:  </b><input type="text" id="fontes-primarias" name="fontes-primarias" class="form-control" placeholder="Insira as fontes primárias" value="<?php echo $obra->fontes_primarias ?>">
                        </div>

                        <div class="col-sm-12">
                          <b>Fontes bibliográficas: </b><input type="text" id="fontes-bibliograficas" name="fontes-bibliograficas" class="form-control" placeholder="Insira as fontes bibliográficas" value="<?php echo $obra->fontes_bib ?>">
                        </div>
                      </div>

                    <br><br>

                      <label> PRENCHIMENTO TÉCNICO</label>
                      <div class="row">
                        <div class="col-sm-12"><b>Técnico Responsável pelo preenchimento técnico: </b><input type="text" id="responsavel" name="responsavel" class="form-control" placeholder="Digite o responsável pelo preenchimento técnico" value="<?php echo $obra->resp_preenc_tec ?>"></div>
                          <div class="col-sm-12"><b>Nome do fotógrafo: </b><input type="text" id="nome-fotografo" name="nome-fotografo" class="form-control" placeholder="Digite o nome do fotógrafo" value="<?php echo $obra->nome_fotografo ?>"></div>
                          
                          <div class="col-sm-6"><b>Responsável pela digitação: </b><input type="text" id="responsavel-digitacao" name="responsavel-digitacao" class="form-control" placeholder="Digite o nome do responsável pela digitação" value="<?php echo $obra->resp_digitacao ?>"></div>
                          <div class="col-sm-6">
                            <b> Data da digitação: </b><input type="date" id="data-digitacao" name="data-digitacao" class="form-control"  value="<?php echo $obra->data_digitacao ?>">
                          </div>
                          
                          <div class="col-sm-6"><b>Responsável pela revisão: </b> <input type="text" id="responsavel-revisao" name="responsavel-revisao" class="form-control" placeholder="Digite o nome do responsável pela revisão" value="<?php echo $obra->resp_revisao ?>"></div>
                          <div class="col-sm-6">
                            <b>Data da revisão:  </b><input type="date" id="data-revisao" name="data-revisao" class="form-control"  value="<?php echo $obra->data_revisao ?>">
                          </div>
                          
                          <div class="col-sm-6"><b>Responsável pela alteração: </b><input type="text" id="responsavel-alteracao" name="responsavel-alteracao" class="form-control" placeholder="Digite o nome do responsável pela alteracao" value="<?php echo $obra->resp_alteracao ?>"></div>
                          <div class="col-sm-6">
                            <b>Data da alteração: </b><input type="date" id="data-alteracao" name="data-alteracao" class="form-control"  value="<?php echo $obra->data_alteracao ?>">
                          </div>
                      </div>
                    </div>
                    <button id="botao_atualizar" type="submit" class="btn btn-default"> Atualizar </button>
                <?php
                echo form_close();
                ?>
            <?php
            }?>
        </div>
    </div>
        
</div>
    