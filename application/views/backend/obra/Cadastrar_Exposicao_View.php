<body id="corpo">
<div class="contact tabsregistro">
    <div class="container">
        <!-- Botão para voltar a visualização das exposicoes -->
            <?php echo form_open('Obra_Controller/visualizar_exposicoes/'.$id_obra); ?>
                <button type="submit" class="btn btn-default"> Voltar </button>
            <?php echo form_close();?>
            <!-- FIM -->

        <div class="text-center">
            <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                <h1> Cadastro de Exposição da Obra</h1>                  
            </div>
        </div>
    </div>
</div>


<div class="container" id="caixaexposicao">
        <div class="container-backend">
            <?php if(isset($error)):?>
                <div><?=$error?></div>
            <?php endif; ?>
            <?php
                    echo validation_errors('<div class="alert alert-danger">','</div>');
                    echo form_open('Obra_Controller/salvar_exposicao/'.$id_obra);
                ?>

                    <div class="form-group col-md-6">
                        <label id="nome-exposicao">Nome da Exposição</label>
                        <input type="text" id="nome-exposicao" name="nome-exposicao" class="form-control" placeholder="Insira o nome da exposição" value="<?php echo set_value('nome-exposicao');?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label id="local-realizacao">Local de Realização</label>
                        <input type="text" id="local-realizacao" name="local-realizacao" class="form-control" placeholder="Insira os dados de localização" value="<?php echo set_value('local-realizacao');?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label id="descricao-exposicao">Descrição</label>
                        <textarea type="text" id="descricao-exposicao" name="descricao-exposicao" class="form-control" placeholder="Descreva o evento" value="<?php echo set_value('descricao-exposicao');?>" required cols="100" rows="6"></textarea>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label id="data-inicio-exp">Data de Início da Exposição</label>
                        <input type="date" id="data-inicio-exp" name="data-inicio-exp" class="form-control"  value="<?php echo set_value('data-inicio-exp');?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label id="data-fim-exp">Data de Término da Exposição</label>
                        <input type="date" id="data-fim-exp" name="data-fim-exp" class="form-control"  value="<?php echo set_value('data-fim-exp');?>">
                    </div>


                    <button type="submit" class="btn btn-default" id="cadastrar"> Cadastrar </button>
                <?php
                echo form_close();
                ?>
        </div>
    </div>
</div>