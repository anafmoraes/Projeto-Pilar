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
    
    <div class="row">
        <div class="img">
            <?php foreach ($imagens as $imagem){ ?>
                <?php
                    $source = echo $imagem->caminho_img . echo $imagem->id_img . echo $imagem->extensao;
                ?>
                <figure>
                    <img src="<?php $source ?>" alt=" <?php echo $imagem->nome_img ?>" style="width:100%">
                    <figcaption> <?php echo $imagem->nome_img ?> </figcaption>
                </figure>
            <?php
            }?>
        </div>
    </div>
            

    <div class="row">
        <h3>Galeria de Imagens </h3>
    </div>        
</div>