<div class="protocolos form">
<?php echo $this->Form->create('Protocolo'); ?>
	<fieldset>
		<legend><?php echo __('Add Protocolo'); ?></legend>
	<?php
		echo $this->Form->input('numero_protocolo');
		echo $this->Form->input('codigo_validacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Protocolos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sends'), array('controller' => 'sends', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Send'), array('controller' => 'sends', 'action' => 'add')); ?> </li>
	</ul>
</div>
