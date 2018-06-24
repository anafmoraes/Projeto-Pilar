<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--  Botão para voltar para a pré-visualização  -->
            <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
                <button id="botao_voltar" class="btn btn-default" type="submit"> Voltar </button>
            <?php echo form_close();?>
            <!--  FIM  -->
        </div>
        <br><br>
    </div>

    <div class ="row">
            <!-- Formulário de upload de imagens -->
            <?php echo form_open_multipart('Obra_Controller/add_img_obra/'.$id_obra);?>
                <div class="col-md-4">
                    <input class="form-control" type="file" name="userfile" size="20" />
                </div>
                <div class="col-md-4">
                    <button id="add_img" class="btn btn-default add_img" type="submit"> Adicionar </button>
                </div>                
            <?php echo form_close();?>
    </div>
    
    <div class="row">
        <h3>Galeria de Imagens </h3>
        <hr>
    </div>

    <div class="row">        
        <?php foreach ($imagens as $imagem){ ?>
            <?php $source = $imagem->caminho_img . $imagem->id_img . '.' . $imagem->extensao; ?>
            <div>
                <figure class="galeria_figure">
                    <img src="<?php echo base_url($source); ?>" alt=" <?php echo $imagem->nome_img ?>" class="img-galeria" >
                    
                    <figcaption>
                        <!-- Nome: <?php echo $imagem->nome_img ?> -->
                        <a id="botao_tornar_padrao" class="btn btn-default" href="<?php echo base_url('Obra_Controller/img_padrao/'.$id_obra.'/'.$imagem->id_img); ?>"> Tornar Padrão </a> |

                        <a id="botao_excluir" class="btn btn-default" data-toggle="modal" data-target="#myModal" > <span class="oi oi-trash"></span> Excluir </a>

                        <!-- Modal de exclusão de imagem -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Tem certeza que deseja excluir a imagem?</h4>
                                    </div>

                                    <div class="modal-footer">
                                        <div class="col-md-2">
                                            <!-- Botão para excluir uma exposição -->
                                            <?php echo form_open('Obra_Controller/remover_img/'.$id_obra.'/'.$imagem->id_img); ?>
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
                    </figcaption>
                </figure>
            </div>
        <?php
        }?>
    </div>
</div>