
<a type="button" href= "<?php echo base_url('pre_visualizacao') ?>" >Pré Visualização</a>
<br><br>
<br><br>
<?php if($this->session->userdata('usuariologado')->id_tipoFuncionario == 1) { ?>
    <a type="button" href= "<?php echo base_url('cadastrar_funcionario') ?>" >Cadastrar funcionário</a>
<?php }?>
<br>
<br>
<br>
<a type="button" href= "<?php echo base_url('logout') ?>" >logout</a>



