	<!-- Início do Header (Barra de Menus) -->
	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo base_url('entrar');?>"><h1><span>P</span>aróquia <span>N</span>ossa <span>S</span>enhora do  <span>P</span>ilar</h1></a>
						</div>
					</div>

					<!-- Menu principal -->
					<div class="navbar-collapse collapse">
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<!-- Controla a exibição das opções do menu -->
								<?php if($this->session->userdata('logado')){ ?>
									<li role="presentation">									
										<a href="<?php echo base_url('entrar') ?>" class="active">Inicio</a>
									</li>
								<?php }?>

								<?php if($this->session->userdata('logado')){ ?>
									<li role="presentation">									
										<a href="<?php echo base_url('pre_visualizacao_obra') ?>" class="active">Obras</a>
									</li>
								<?php }?>

								<?php if($this->session->userdata('logado')){ ?>
									<li role="presentation">
									
										<a href="<?php echo base_url('pre_visualizacao_funcionario') ?>">Funcionarios</a>
									</li>
								<?php }?>

								<!-- Esse link deve mandar para a parte administrativa do sistema
									 onde o administrador ou supervisor possa gerenciar funcionarios e obras (a definir) -->
								<?php if($this->session->userdata('logado') && $this->session->userdata('usuariologado')->id_tipoFuncionario == 1){ ?>
										<li role="presentation">									
											<a href="#">Administrar</a>
										</li>
								<?php }?>

								<?php if($this->session->userdata('logado')){ ?>
									<li role="presentation">									
										<a href="<?php echo base_url('logout') ?>">Sair</a>
									</li>
								<?php }?>

								<?php if(!$this->session->userdata('logado')){ ?>
									<li class="mp" role="presentation" data-toggle="modal" data-target="#myModal">
										<a href="#"><span class="fa fa-home fa-2x"></span> Minha Paróquia</a>
									</li>
								<?php }?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- Fim do Header e início do Modal de Login (Barra de Menus) -->