<div class="sends form">
<?php echo $this->Form->create('Send'); ?>
	<fieldset>
		<legend><?php echo __('Edit Send'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descrcao');
		echo $this->Form->input('data_resposta');
		echo $this->Form->input('protocolo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Send.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Send.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sends'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Protocolos'), array('controller' => 'protocolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add')); ?> </li>
	</ul>
</div>
