<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this -> Html -> Link('OuvidoriaCake','#', array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown active">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Fale com Ouvidoria <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="">Criar Acionamento</a></li>
					<li><a href="#">Outros Canais</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $this->base;?>/posts/busca">Consultar Protocolo</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Informações<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Legislação</a></li>
					<li><a href="#">Tipos de Mensagens</a></li>
					<li><a href="#">Tipos de Assuntos</a></li>
					<li><a href="#">Resultados</a></li>
				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ajuda<b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#">Manual</a></li>
					<li><a href="#">Suporte</a></li>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->