<div class="contatos index">
	<h2><?php echo __('Contatos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('telefone'); ?></th>
			<th><?php echo $this->Paginator->sort('telefoneComercial'); ?></th>
			<th><?php echo $this->Paginator->sort('ramal'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contatos as $contato): ?>
	<tr>
		<td><?php echo h($contato['Contato']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $contato['Pessoa']['id'])); ?>
		</td>
		<td><?php echo h($contato['Contato']['telefone']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['telefoneComercial']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['ramal']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['celular']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['fax']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['email']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['created']); ?>&nbsp;</td>
		<td><?php echo h($contato['Contato']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contato['Contato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contato['Contato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contato['Contato']['id']), null, __('Are you sure you want to delete # %s?', $contato['Contato']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contato'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
