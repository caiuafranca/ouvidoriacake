<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
	</ul>
</div>

<div id="page-content" class="col-sm-9">
<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Add Usuario'); ?></legend>
	<?php
		echo $this->Form->input('nome', array('class' => 'form-control'));
		echo $this->Form->input('username', array('class' => 'form-control'));
		echo $this->Form->input('password', array('class' => 'form-control'));
		echo $this->Form->input('role', array('class' => 'form-control'));
	?>
	</fieldset>
	<br />
 	<?php echo $this->Form->submit(__('Cadastrar'), array('class' => 'btn btn-large btn-primary')); ?>
	<?php echo $this->Form->end(); ?>
	<br />
</div>
</div>