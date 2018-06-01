<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!--  Botão para voltar para a pré-visualização  -->
            <?php echo form_open('Obra_Controller/pesquisar_obra/'.$id_obra); ?>
                <button style="width: 110px" class="btn btn-default" type="submit"> Voltar </button>
            <?php echo form_close();?>
            <!--  FIM  -->
        </div>
        <br><br>
    </div>

        <!-- <?php echo $error;?> -->
    <div class ="row">
        <div class="col-md-6">
            <?php
            echo form_open_multipart('Obra_Controller/add_img_obra/'.$id_obra);?>
                <input class="form-control" type="file" name="userfile" size="20" />
                <button class="btn btn-default" type="submit"> Adicionar Nova Imagem </button>
            <!-- </form> -->
            <?php echo form_close();?>
        </div>
    </div>
        
        <!-- <div class="col-md-4">
            <div class="form-group">
                <div class="img-container-card">                      
                        
                </div>
                <?php
                    //Cria variaveis para estilizar o form de imagem
                    $div_open = '<div class="form-group">';
                    $div_close = '</div>';

                    // Chama o form de imagem
                    echo form_open_multipart('Funcionario_Controller/add_img_obra/'.$id_obra);
                    //Passa o id do usuario p ser usado no controller e model
                    echo form_hidden('id_funcionario', $id_obra);
                    echo $div_open;
                    //cria um arrray com as definicões que o form upload deve ter
                    $imagem = array('name' => 'userfile', 'id' => 'userfile', 'class' => 'form-control');
                    //definicao padrão para arqivos q serao enviados para servers remotos, obrigado a ser 'userfile'
                    echo form_upload($imagem);
                    echo $div_close;
                    echo $div_open;
                    //Cria as definições dos atributos html do botao
                    $botao = array('name' => 'btn-adicionar', 'id' => 'btn-adicionar', 'class' => 'btn btn-default', 'value' => 'Adicionar Nova Imagem');
                    //Cria botão de submit do form;
                    echo form_submit($botao);
                    echo$div_close;
                    //Fecha o form
                    echo form_close();
                ?>                        
            </div>
        </div> -->

    <div class="row">
        <h3>Galeria de Imagens </h3>
    </div>        
</div>