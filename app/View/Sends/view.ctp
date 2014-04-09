<div class="sends view">
<h2><?php echo __('Send'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($send['Send']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descrcao'); ?></dt>
		<dd>
			<?php echo h($send['Send']['descrcao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Resposta'); ?></dt>
		<dd>
			<?php echo h($send['Send']['data_resposta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Protocolo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($send['Protocolo']['id'], array('controller' => 'protocolos', 'action' => 'view', $send['Protocolo']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Send'), array('action' => 'edit', $send['Send']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Send'), array('action' => 'delete', $send['Send']['id']), null, __('Are you sure you want to delete # %s?', $send['Send']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sends'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Send'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Protocolos'), array('controller' => 'protocolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add')); ?> </li>
	</ul>
</div>
