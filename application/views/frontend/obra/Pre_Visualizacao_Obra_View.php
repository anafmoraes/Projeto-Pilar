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
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4> <?php echo $obra->nome_objeto ?> </h4>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h4 class="card-title"><?php echo $obra->titulo ?></h4>
                            <p class="card-text">                            
                                <b>Número atual: </b><?php echo $obra->num_atual ?><br>
                                <b>Descrição do objeto: </b><?php echo $obra->descricao_objeto ?><br>
                            </p>                        
                        </div>



                       




                        <div class="col-sm-2 col-md-2 col-lg-6">
                            <img src="<?php echo base_url('/assets/img/obra_default.jpg');?>" class="img-fluid" width=500px>
                        </div>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD
                         via GET-->
                        <?php echo form_open('Obra_Controller/pesquisar_obra/'.$obra->id_obra); ?>
                            <button class="btn btn-default" type="submit" name="txt-visualizar" value="" style="width: 250px"> Visualizar Registro </button>
                        <?php echo form_close();?>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <?php
    }?>
</div>        
<br>   