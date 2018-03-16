        <!-- Fim do bodi1 e início do Modal de Login (Corpo da página) -->

        <!--Este modal é ativado via botão, o botão está no arquivo header.php na barra de menus e é disparado pela opção Minha Paróquia-->
        <!-- Modal -->
        <div class="container">
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
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
                                    <button class="btn btn-lg btn-success btn-block">Entrar</button>
                                </fieldset>
                            <?php
                            echo form_close();
                            ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
                <!-- Fim Modal COntent -->
            </div>
        </div>
        <!-- Fim do Modal de Login e início do body1 (Corpo da página) -->