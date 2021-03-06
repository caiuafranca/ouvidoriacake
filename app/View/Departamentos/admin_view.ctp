<div class="departamentos view">
<h2><?php echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nome']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Departamento'), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Departamento'), array('action' => 'delete', $departamento['Departamento']['id']), null, __('Are you sure you want to delete # %s?', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($departamento['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-responsive">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Assunto'); ?></th>
		<th><?php echo __('Mensagem'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Cnpj'); ?></th>
		<th><?php echo __('Data Menssagem'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Protocolo Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($departamento['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['assunto']; ?></td>
			<td><?php echo $post['mensagem']; ?></td>
			<td><?php echo $post['nome']; ?></td>
			<td><?php echo $post['email']; ?></td>
			<td><?php echo $post['phone']; ?></td>
			<td><?php echo $post['cpf']; ?></td>
			<td><?php echo $post['cnpj']; ?></td>
			<td><?php echo $post['data_menssagem']; ?></td>
			<td><?php echo $post['status']; ?></td>
			<td><?php echo $post['protocolo_id']; ?></td>
			<td><?php echo $post['tipo_id']; ?></td>
			<td><?php echo $post['departamento_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
