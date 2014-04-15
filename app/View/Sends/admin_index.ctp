
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Send'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Protocolos'), array('controller' => 'protocolos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Protocolo'), array('controller' => 'protocolos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<div class="sends index">
	<h2><?php echo __('Sends'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-responsive">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descrcao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_resposta'); ?></th>
			<th><?php echo $this->Paginator->sort('protocolo_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sends as $send): ?>
	<tr>
		<td><?php echo h($send['Send']['id']); ?>&nbsp;</td>
		<td><?php echo h($send['Send']['descrcao']); ?>&nbsp;</td>
		<td><?php echo h($send['Send']['data_resposta']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($send['Protocolo']['id'], array('controller' => 'protocolos', 'action' => 'view', $send['Protocolo']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $send['Send']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $send['Send']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $send['Send']['id']), null, __('Are you sure you want to delete # %s?', $send['Send']['id'])); ?>
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