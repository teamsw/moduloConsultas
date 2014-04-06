<div class="agendas index">
	<h2><?php echo __('Agendas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('consulta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('bloqueado'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agendas as $agenda): ?>
	<tr>
		<td><?php echo h($agenda['Agenda']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($agenda['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $agenda['Pessoa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($agenda['Consulta']['id'], array('controller' => 'consultas', 'action' => 'view', $agenda['Consulta']['id'])); ?>
		</td>
		<td><?php echo h($agenda['Agenda']['data']); ?>&nbsp;</td>
		<td><?php echo h($agenda['Agenda']['bloqueado']); ?>&nbsp;</td>
		<td><?php echo h($agenda['Agenda']['status']); ?>&nbsp;</td>
		<td><?php echo h($agenda['Agenda']['created']); ?>&nbsp;</td>
		<td><?php echo h($agenda['Agenda']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $agenda['Agenda']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $agenda['Agenda']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $agenda['Agenda']['id']), null, __('Are you sure you want to delete # %s?', $agenda['Agenda']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Agenda'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
