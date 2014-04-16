<h2>DashBoard</h2>
<h3><?php echo $user['Usuario']['username'] . ", "; ?>Bem Vindo!</h3>

<div id="main-container">
	<div id="header" class="container" align="center">
		<?php $img = $this -> Html -> image('post.ico', array('alt' => 'Sistema Ouvidoria'));
		echo $this -> Html -> link($img, '#', array('escape' => false, 'title' => 'Sistema de Ouvidoria', 'class' => 'img-anima', ));
		?>
		<?php $img = $this -> Html -> image('ok.ico', array('alt' => 'Sistema Ouvidoria'));
			echo $this -> Html -> link($img, '#', array('escape' => false, 'title' => 'Sistema de Ouvidoria', 'class' => 'img-anima', ));
		?>
		<?php $img = $this -> Html -> image('zoom.ico', array('alt' => 'Sistema Ouvidoria'));
			echo $this -> Html -> link($img, '#', array('escape' => false, 'title' => 'Sistema de Ouvidoria', 'class' => 'img-anima', ));
		?>
		<?php $img = $this -> Html -> image('barcode.ico', array('alt' => 'Sistema Ouvidoria'));
			echo $this -> Html -> link($img, '#', array('escape' => false, 'title' => 'Sistema de Ouvidoria', 'class' => 'img-anima', ));
		?>
	</div>
</div>

