<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Protocolo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Protocolo']['numero_protocolo'], array('controller' => 'protocolos', 'action' => 'view', $post['Protocolo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $post['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Departamento']['nome'], array('controller' => 'departamentos', 'action' => 'view', $post['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['TipoUsuario']['nome'], array('controller' => 'tipo_usuarios', 'action' => 'view', $post['TipoUsuario']['id'])); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('Assunto'); ?></dt>
		<dd>
			<?php echo h($post['Post']['assunto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mensagem'); ?></dt>
		<dd>
			<?php echo h($post['Post']['mensagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($post['Post']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($post['Post']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($post['Post']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($post['Post']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cnpj'); ?></dt>
		<dd>
			<?php echo h($post['Post']['cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Menssagem'); ?></dt>
		<dd>
			<?php echo h($post['Post']['data_menssagem']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($post['Post']['status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['id']), null, __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Protocolos'), array('controller' => 'protocolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Usuarios'), array('controller' => 'tipo_usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Usuario'), array('controller' => 'tipo_usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
