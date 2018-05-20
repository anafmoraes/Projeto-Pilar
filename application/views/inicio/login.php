<div class="container">
    <div class="text-center">

        <div class="features">
            <div class="container">
                <div class="text-center">
                    <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                        <!--<h3>Providing Our Clients</h3>-->
                    </div>
                    <div class="wow bounceInDown" data-wow-offset="0" data-wow-delay="0.6s">
                        <h2>Museu de Arte Sacra de Ouro Preto</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="col-lg-6 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.5s">
                <img img src="<?php echo base_url('assets/images/history/museu.jpg') ?>" class="img-responsive" >
            </div>

            <div class="col-lg-6 wow fadeInRight">
                <div class="text-left">
                    <div class="tx">
                        <p>
                            O Museu de Arte Sacra de Ouro Preto, inaugurado em 2000, localiza-se na Basílica de Nossa Senhora do Pilar. Fica na cripta da Basílica, que é um espaço sob a sacristia, encontrado durante a última reforma do monumento e onde, acredita-se, funcionava uma mina de ouro.
                        </p>

                        <p>
                            O acervo do museu conta com 400 peças produzidas entre os séculos XVII e XIX. São peças religiosas e profanas dos períodos Maneirista, Barroco, Rococó e Neoclássico e abrangem a história da antiga Vila Rica durante o período áureo da mineração do ouro.
                        </p>

                        <p>
                            Elas estão distribuídas em oito vitrines temáticas. São imagens santas, resplendores, banquetas, documentos e até vestimentas dos moradores da época.
                        </p>

                        <p>
                            Os visitantes têm acesso não só às peças, mas à informações sobre o contexto histórico As peças estão dispostas em uma sala, em vitrines com legendas em português.
                        </p>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>

<!--Este modal é ativado via botão, o botão está no arquivo header.php na barra de menus e é disparado pela opção Minha Paróquia-->
<!-- Modal -->
<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-dialog-subscribed">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Entrar no Sistema</h4>
                </div>

                <div class="modal-body">
                    <?php
                    echo validation_errors('<div class="alert alert-danger">','</div>');
                    echo form_open('login');
                    ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="txt-email" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="txt-senha" type="password" value="">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-default btn-block"> Entrar </button>
                        </fieldset>
                    <?php
                    echo form_close();
                    ?>
                </div>
            </div>
        </div>
        <!-- Fim Modal COntent -->
    </div>
</div>
<!-- Fim do Modal de Login e início do body1 (Corpo da página) -->