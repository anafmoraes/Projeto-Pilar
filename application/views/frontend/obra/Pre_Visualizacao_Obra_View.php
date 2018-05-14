<div class="container">
    <div class="row">
        <div class="col-sm-offset-10">
            <!-- Código que leva para o form de cadasttro de obra -->
            <a style="width: 200px" class="btn btn-default" type="button" href= "<?php echo base_url('Obra_Controller/cadastrar_obra') ?>" >Cadastrar Obra</a>
        </div>
    </div>
    <div class="row text-center">
        <h1> Obras registradas </h1>
    </div>
</div><br>

<div class="container">
    <!-- Lista todas as obras registradas no banco de dados -->
    <?php
        foreach ($obras as $obra){ ?>
    <div class="row">
        <div class="col-sm-offset-2">
            <div class="card" style="width: 75rem">
                <div class="card-header">
                    <h4> <?php echo $obra->nome_objeto ?> </h4>
                </div>
                <div class="card-body">
                    <div class="col-sm-6">
                        <h4 class="card-title">Título: <?php echo $obra->titulo ?></h4>
                        <p class="card-text">
                        
                            Número atual: <?php echo $obra->num_atual ?><br>
                            Número Anterior: <?php echo $obra->num_anterior ?><br>
                            Imagem associada (ainda sem referencia): <?php echo $obra->imagem ?><br>
                        
                        </p>
                        <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD
                         via GET-->
                        <?php echo form_open('Obra_Controller/pesquisar_obra/'.$obra->id_obra); ?>
                            <button class="btn btn-default" type="submit" name="txt-visualizar" value="" style="width: 250px"> Visualizar Registro </button>
                        <?php echo form_close();?>
                    </div>
                    <div class="col-sm-2">
                        <img src="<?php echo base_url('/assets/img/default-image.png');?>" class="img-fluid" width=300px>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }?>
</div>        
<br>   