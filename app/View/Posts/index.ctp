<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('assunto'); ?></th>
			<th><?php echo $this->Paginator->sort('mensagem'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('cnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('data_menssagem'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('protocolo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['assunto']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['mensagem']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['nome']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['email']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['phone']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['cnpj']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['data_menssagem']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($post['Protocolo']['numero_protocolo'], array('controller' => 'protocolos', 'action' => 'view', $post['Protocolo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $post['Tipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($post['Departamento']['nome'], array('controller' => 'departamentos', 'action' => 'view', $post['Departamento']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Protocolos'), array('controller' => 'protocolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
