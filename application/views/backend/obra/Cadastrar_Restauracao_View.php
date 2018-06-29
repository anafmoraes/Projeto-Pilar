<body id="corpo">
<div class="contact tabsregistro">
    <div class="container">
        <!-- Botão para voltar a visualização das exposicoes -->
            <?php echo form_open('Obra_Controller/visualizar_restauracoes/'.$id_obra); ?>
                <button id="botao_voltar" type="submit" class="btn btn-default"> Voltar </button>
            <?php echo form_close();?>
            <!-- FIM -->

        <div class="text-center">
            <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                <h1>Cadastro de Restauração da Obra</h1>                  
            </div>
        </div>
    </div>
</div>

<div class="container" id="caixarestauracao">
        <div class="container-backend">
            <?php if(isset($error)):?>
                <div><?=$error?></div>
            <?php endif; ?>
            <?php
                echo validation_errors('<div class="alert alert-danger">','</div>');
                echo form_open_multipart('Obra_Controller/salvar_restauracao/'.$id_obra);
                ?>
                    <div class="form-group col-md-6">
                        <label id="nome-restaurador"> Nome do Restaurador </label>
                        <input type="text" id="nome-restaurador" name="nome-restaurador" class="form-control" placeholder="Insira o nome do restaurador" value="<?php echo set_value('nome-restaurador');?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label id="data-restauracao">Data da Restauração </label>
                        <input type="date" id="data-restauracao" name="data-restauracao" class="form-control"  value="<?php echo set_value('data-restauracao');?>">
                    </div>

                    <div class="form-group col-md-12">
                        <label id="tipo-intervencao">Tipo de Intervenção</label>
                        <textarea cols="100" rows="5" type="text" id="tipo-intervencao" name="tipo-intervencao" class="form-control" placeholder="Insira o tipo de intervenção" value="<?php echo set_value('tipo-intervencao');?>"></textarea>
                    </div>

                    

                    <button type="submit" class="btn btn-default" id="cadastrar"> Cadastrar</button>
                <?php
                echo form_close();
                ?>
        </div>
    </div>
</div>