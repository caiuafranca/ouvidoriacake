<!--
<div id="page-container" class="row">
    <div id="sidebar" class="col-sm-3">
		<div class="actions">
			<div class="list-group">
				<ul>
					<li><?php //echo $this->Html->link(__('List Posts'), array('action' => 'index'),array('class' => 'list-group-item')); ?></li>
					<li><?php //echo $this->Html->link(__('List Protocolos'), array('controller' => 'protocolos', 'action' => 'index'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('List Tipo Usuarios'), array('controller' => 'tipo_usuarios', 'action' => 'index'),array('class' => 'list-group-item')); ?> </li>
					<li><?php //echo $this->Html->link(__('New Tipo Usuario'), array('controller' => 'tipo_usuarios', 'action' => 'add'),array('class' => 'list-group-item')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
-->

<div id="page-content" class="col-sm-9">
<div class="posts form">
<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('assunto', array('class' => 'form-control'));
		echo $this->Form->input('mensagem', array('class' => 'form-control'));
		echo $this->Form->input('tipo_id', array('class' => 'form-control'));
		echo $this->Form->input('departamento_id', array('class' => 'form-control'));
		echo $this->Form->input('tipo_usuario_id', array('class' => 'form-control'));
		echo $this->Form->input('nome', array('class' => 'form-control'));
		echo $this->Form->input('email', array('class' => 'form-control'));
		echo $this->Form->input('phone', array('class' => 'form-control'));
		echo $this->Form->input('cpf', array('class' => 'form-control'));
		echo $this->Form->input('cnpj', array('class' => 'form-control'));
		echo $this->Form->input('data_menssagem', array('class' => 'form-control datepicker','type'=>'text'));
		echo $this->Form->input('status', array('class' => 'form-control'));
		//echo $this->Form->input('protocolo_id'); - NÃO DESCOMENTAR ESTA LINHA
	?>
	</fieldset>
	<br />
 	<?php echo $this->Form->submit(__('Cadastrar'), array('class' => 'btn btn-large btn-primary')); ?>
	<?php echo $this->Form->end(); ?>
	<br />
</div>
</div>