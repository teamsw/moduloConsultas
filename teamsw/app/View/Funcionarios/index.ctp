<div class="funcionarios index">
	<h2><?php echo __('Funcionarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('registro'); ?></th>
			<th><?php echo $this->Paginator->sort('dataAdmissao'); ?></th>
			<th><?php echo $this->Paginator->sort('dataDemissao'); ?></th>
			<th><?php echo $this->Paginator->sort('titulacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($funcionarios as $funcionario): ?>
	<tr>
		<td><?php echo h($funcionario['Funcionario']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($funcionario['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $funcionario['Pessoa']['id'])); ?>
		</td>
		<td><?php echo h($funcionario['Funcionario']['registro']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['dataAdmissao']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['dataDemissao']); ?>&nbsp;</td>
		<td><?php echo h($funcionario['Funcionario']['titulacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
