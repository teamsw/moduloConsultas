<div class="tipoAtendimentos index">
	<h2><?php echo __('Tipo Atendimentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('consulta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('subNome'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('arquivo'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoAtendimentos as $tipoAtendimento): ?>
	<tr>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tipoAtendimento['Consulta']['id'], array('controller' => 'consultas', 'action' => 'view', $tipoAtendimento['Consulta']['id'])); ?>
		</td>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['nome']); ?>&nbsp;</td>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['subNome']); ?>&nbsp;</td>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['arquivo']); ?>&nbsp;</td>
		<td><?php echo h($tipoAtendimento['TipoAtendimento']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoAtendimento['TipoAtendimento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoAtendimento['TipoAtendimento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoAtendimento['TipoAtendimento']['id']), null, __('Are you sure you want to delete # %s?', $tipoAtendimento['TipoAtendimento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipo Atendimento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
