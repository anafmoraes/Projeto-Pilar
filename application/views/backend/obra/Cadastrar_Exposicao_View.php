<h1> Cadastro de Exposição </h1>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="col-md-1"></div>
        <div class="container-backend">
            <?php if(isset($error)):?>
                <div><?=$error?></div>
            <?php endif; ?>
            <div class="col-md-8">
                <?php
                    echo validation_errors('<div class="alert alert-danger">','</div>');
                    echo form_open('Obra_Controller/salvar_exposicao');
                ?>

                    <input  type="hidden" name="txt-id" value="<?php echo $obra ?>"/>

                    <div class="form-group">
                        <label id="nome-exposicao">Nome da Exposição</label>
                        <input type="text" id="nome-exposicao" name="nome-exposicao" class="form-control" placeholder="Insira o nome da exposição" value="<?php echo set_value('nome-exposicao');?>">
                    </div>
                    <div class="form-group">
                        <label id="descricao-exposicao">Descrição</label>
                        <input type="text" id="descricao-exposicao" name="descricao-exposicao" class="form-control" placeholder="Descreva o evento" value="<?php echo set_value('descricao-exposicao');?>">
                    </div>
                    <div class="form-group">
                        <label id="local-realizacao">Local de Realização</label>
                        <input type="text" id="local-realizacao" name="local-realizacao" class="form-control" placeholder="Insira os dados de localização" value="<?php echo set_value('local-realizacao');?>">
                    </div>
                    <div class="form-group">
                        <label id="data-inicio-exp">Data de Início da Exposição</label>
                        <input type="date" id="data-inicio-exp" name="data-inicio-exp" class="form-control"  value="<?php echo set_value('data-inicio-exp');?>">
                    </div>
                    <div class="form-group">
                        <label id="data-fim-exp">Data de Término da Exposição</label>
                        <input type="date" id="data-fim-exp" name="data-fim-exp" class="form-control"  value="<?php echo set_value('data-fim-exp');?>">
                    </div>


                    <button type="submit" class="btn btn-default"> Cadastrar Exposição </button>
                <?php
                echo form_close();
                ?>
            </div>
        </div>
    </div>
</div>