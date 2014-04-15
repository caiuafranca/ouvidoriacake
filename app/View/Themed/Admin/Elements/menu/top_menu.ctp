<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this -> Html -> Link('OuvidoriaCake','/', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Fale com Ouvidoria <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="<?php echo $this->base?>/posts/add">Criar Acionamento</a></li>
					<li><?php echo $this->Html->link(__('Outros Canais'), array('controller' => 'pages', 'action' => 'outroscanais'));?></li>
				</ul>
			</li>
			<li><a href="<?php echo $this->base;?>/posts/busca">Consultar Protocolo</a></li>
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
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajuda<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><?php echo $this->Html->link(__('Manual'), array('controller' => 'pages', 'action' => 'manual'));?></li>
					<li><?php echo $this->Html->link(__('Suporte'), array('controller' => 'pages', 'action' => 'suporte'));?></li>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->