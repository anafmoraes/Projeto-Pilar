<div class="container">

    <div class="row">
        <h2> Pré Visualização Obra </h2>

        <!-- Código que leva para o form de cadasttro de obra -->
        <a type="button" href= "<?php echo base_url('Obra_Controller/cadastrar_obra') ?>" >Cadastrar Obra</a>

        <!-- Lista todas as obras registradas no banco de dados -->
        <div>
            <?php
            foreach ($obras as $obra){ ?>
                <h4> <?php echo $obra->nome_objeto ?> </h4>
                <p>
                   Número atual: <?php echo $obra->num_atual ?>
                </p>

                <p>
                   Número Anterior: <?php echo $obra->num_anterior ?>
                </p>

                <p>
                   Título: <?php echo $obra->titulo ?>
                </p>

                <p>
                   Imagem associada (ainda sem referencia): <?php echo $obra->imagem ?>
                </p>

                <!-- Passa o id_obra para o form que será usado lá no controller para realizar a busca no BD
                     via GET
                -->
                <?php echo form_open('Obra_Controller/pesquisar_obra/'.$obra->id_obra); ?>
                    <button type="submit" name="txt-visualizar" value=""> Visualizar Registro </button>
                <?php echo form_close();?>
            <?php
            }?>
        </div>
    </div>        
</div>

    