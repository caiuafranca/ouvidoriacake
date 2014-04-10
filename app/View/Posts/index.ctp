<div id="sidebar" class="col-sm-3">
	<div class="actions">
		<div class="list-group">
			<?php echo $this -> Html -> link(__('New Post'), array('action' => 'add'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('List Tipo Usuarios'), array('controller' => 'tipo_usuarios', 'action' => 'index'),array('class' => 'list-group-item')); ?>
			<?php echo $this -> Html -> link(__('New Tipo Usuario'), array('controller' => 'tipo_usuarios', 'action' => 'add'),array('class' => 'list-group-item')); ?>
		</div>
	</div>
</div>

<div id="page-content" class="col-sm-9">
<div class="posts index">
	<h2><?php echo __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-responsive">
	<tr>
			<th><?php echo $this -> Paginator -> sort('id'); ?></th>
			<th><?php echo $this -> Paginator -> sort('assunto'); ?></th>
			<th><?php echo $this -> Paginator -> sort('mensagem'); ?></th>
			<th><?php echo $this -> Paginator -> sort('nome'); ?></th>
			<th><?php echo $this -> Paginator -> sort('email'); ?></th>
			<th><?php echo $this -> Paginator -> sort('phone'); ?></th>
			<th><?php echo $this -> Paginator -> sort('cpf'); ?></th>
			<th><?php echo $this -> Paginator -> sort('cnpj'); ?></th>
			<th><?php echo $this -> Paginator -> sort('data_menssagem'); ?></th>
			<th><?php echo $this -> Paginator -> sort('status'); ?></th>
			<th><?php echo $this -> Paginator -> sort('protocolo_id'); ?></th>
			<th><?php echo $this -> Paginator -> sort('tipo_id'); ?></th>
			<th><?php echo $this -> Paginator -> sort('departamento_id'); ?></th>
			<th><?php echo $this -> Paginator -> sort('tipo_usuario_id'); ?></th>
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
		<td><?php echo h($this->Time->format('d/m/Y H:i:s',$post['Post']['data_menssagem']));?>&nbsp;</td>
		<td><?php echo h($post['Post']['status']); ?>&nbsp;</td>
		<td>
			<?php echo $this -> Html -> link($post['Protocolo']['numero_protocolo'], array('controller' => 'protocolos', 'action' => 'view', $post['Protocolo']['id'])); ?>
		</td>
		<td>
			<?php echo $this -> Html -> link($post['Tipo']['nome'], array('controller' => 'tipos', 'action' => 'view', $post['Tipo']['id'])); ?>
		</td>
		<td>
			<?php echo $this -> Html -> link($post['Departamento']['nome'], array('controller' => 'departamentos', 'action' => 'view', $post['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this -> Html -> link($post['TipoUsuario']['nome'], array('controller' => 'tipo_usuarios', 'action' => 'view', $post['TipoUsuario']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this -> Html -> link(__('View'), array('action' => 'view', $post['Post']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this -> Html -> link(__('Edit'), array('action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-default btn-xs')); ?>
			<?php echo $this -> Form -> postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-default btn-xs'), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p><small>
                    <?php
					echo $this -> Paginator -> counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
                    ?>			</small></p>

            <ul class="pagination">
                <?php
				echo $this -> Paginator -> prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				echo $this -> Paginator -> numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
				echo $this -> Paginator -> next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                ?>
            </ul><!-- /.pagination -->
	</div>
	</div>