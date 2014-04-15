<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this -> Html -> Link('OuvidoriaCake','/admin/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manter Tabelas <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->base?>/admin/usuarios/">Usuarios</a></li>
					<li><?php echo $this->Html->link(__('Departamentos'), array('controller' => 'departamentos', 'action' => 'index'));?></li>
					<li><?php echo $this->Html->link(__('Protocolos'), array('controller' => 'protocolos', 'action' => 'index'));?></li>
					<li><?php echo $this->Html->link(__('Respostas'), array('controller' => 'sends', 'action' => 'index'));?></li>
					<li><?php echo $this->Html->link(__('Tipos de Usuarios'), array('controller' => 'tipousuarios', 'action' => 'index'));?></li>
					<li><?php echo $this->Html->link(__('Tipos de Mensagens'), array('controller' => 'tipos', 'action' => 'index'));?></li>
				</ul>
			</li>
			<li><a href="<?php echo $this->base;?>/posts/busca">Consultar</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Informações<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Legislação'), array('controller' => 'pages', 'action' => 'legislacao'));?></li>
					<li><a href="#">Tipos de Mensagens</a></li>
					<li><a href="#">Tipos de Assuntos</a></li>
					<li><a href="#">Resultados</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatorios<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Manual'), array('controller' => 'pages', 'action' => 'manual'));?></li>
					<li><?php echo $this->Html->link(__('Suporte'), array('controller' => 'pages', 'action' => 'suporte'));?></li>
				</ul>
			</li>
			<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'usuarios', 'action' => 'logout'));?></li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->