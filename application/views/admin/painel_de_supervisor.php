<div class="container">

	<div class="row">
		<h3> Área Supervisor </h3>
		<br>
		<ul class="list-group">
			 <?php  foreach ($obras as $obra){  ?>	
			 	<?php if ($obra->situacao == 0){ ?>
		  		<li class="list-group-item"> 
		  			<b>Nome do Objeto:  </b><?php echo $obra->nome_objeto ?>   -   <b>No Anterior:  </b>  <?php echo $obra->num_anterior ?> - <b>No Atual: </b>  <?php echo $obra->num_atual ?>
		  		
			  		<button type="button" data-toggle="modal" data-target="<?php echo "#myModal".$obra->id_obra; ?>" title="Confirmar Exclusão" class="btn btn-default listagem-supervisor confirmar">
		  				<i title="Confirmar Exclusão" class="fas icone-botao fa-check"></i>
		  			</button>
			        <button type="button" data-toggle="modal" data-target="<?php echo "#ModalVoltar".$obra->id_obra; ?>" title="Retornar Obra" class="btn btn-default listagem-supervisor voltar">
		  				<i class="fas icone-botao fa-undo-alt" title="Retornar Obra"></i>
		  			</button>
		  			<a href="<?php echo base_url('Obra_Controller/pesquisar_obra/'.$obra->id_obra); ?>"><button type="button" title="Visualizar Obra" class="btn btn-default listagem-supervisor editar">
			  					<i class="fas icone-botao fa-file-signature" title="Visualizar Obra"></i>
			  		</button></a>
		  			
			  	</li>
		  		
		  			 <!-- Modal de exclusão de obra -->
					    <div class="modal fade" id="<?php echo "myModal".$obra->id_obra; ?>" role="dialog">
					        <div class="modal-dialog modal-sm">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal">&times;</button>
					                    <h4 class="modal-title">Tem certeza que deseja excluir a obra?</h4>
					                </div>

					                <div class="modal-footer">
					                    
					                    <div class="col-md-2">
					                        <?php echo form_open('Obra_Controller/remover_obra/'.$obra->id_obra); ?>
					                            <button type="submit" class="btn btn-default"> Sim </button>
					                        <?php echo form_close();?>
					                    </div>
					                    <div class="col-md-offset-2">
					                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					    <div class="modal fade" id="<?php echo "ModalVoltar".$obra->id_obra; ?>" role="dialog">
					        <div class="modal-dialog modal-sm">
					            <div class="modal-content">
					                <div class="modal-header">
					                    <button type="button" class="close" data-dismiss="modal">&times;</button>
					                    <h4 class="modal-title">Tem certeza que deseja retornar a obra?</h4>
					                </div>

					                <div class="modal-footer">
					                    
					                    <div class="col-md-2">
					                        <?php echo form_open('Obra_Controller/inclusao_logica/'.$obra->id_obra); ?>
					                            <button type="submit" class="btn btn-default"> Sim </button>
					                        <?php echo form_close();?>
					                    </div>
					                    <div class="col-md-offset-2">
					                        <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					    <!-- Fim modal de exclusão de obra -->
			<?php }} ?>
		</ul>
	</div>
</div>
