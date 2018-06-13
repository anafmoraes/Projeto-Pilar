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
        <div class="col-md-6">
            <!-- Formulário de upload de imagens -->
            <?php echo form_open_multipart('Obra_Controller/add_img_obra/'.$id_obra);?>
                <input class="form-control" type="file" name="userfile" size="20" />
                <button id="add_img" class="btn btn-default add_img" type="submit"> Adicionar Nova Imagem </button>
            <?php echo form_close();?>
        </div>
    </div>
    
    <div class="row">
        <h3>Galeria de Imagens </h3>
        <hr>
    </div>

    <div class="row">        
        <?php foreach ($imagens as $imagem){ ?>
        <?php
            $source = $imagem->caminho_img . $imagem->id_img . '.' . $imagem->extensao;
        ?>
            <div>
                <figure>
                    <img src="<?php echo base_url($source); ?>" alt=" <?php echo $imagem->nome_img ?>" >
                    
                    <figcaption>
                            Nome: <?php echo $imagem->nome_img ?>
                            <a href="<?php echo base_url('Obra_Controller/img_padrao/'.$id_obra.'/'.$imagem->id_img); ?>"> Tornar Padrão </a>
                    </figcaption>
                </figure>
            </div>
        <?php
        }?>
    </div>
</div>