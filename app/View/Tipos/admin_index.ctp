<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tipo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="tipos index">
	<h2><?php echo __('Tipos'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-responsive">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipos as $tipo): ?>
	<tr>
		<td><?php echo h($tipo['Tipo']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipo['Tipo']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipo['Tipo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipo['Tipo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipo['Tipo']['id']), null, __('Are you sure you want to delete # %s?', $tipo['Tipo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	<p><small>
       <?php echo $this -> Paginator -> 
       counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
                    ?>
    </small></p>
            <ul class="pagination">
                <?php
				echo $this -> Paginator -> prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				echo $this -> Paginator -> numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
				echo $this -> Paginator -> next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                ?>
            </ul><!-- /.pagination -->
	</div>
</div>