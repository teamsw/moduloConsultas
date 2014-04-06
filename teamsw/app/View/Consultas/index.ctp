<div class="consultas index">
	<h2><?php echo __('Consultas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pessoa_id'); ?></th>
			<th><?php echo $this->Paginator->sort('agenda_id'); ?></th>
			<th><?php echo $this->Paginator->sort('forma_atendimento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_atendimento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero'); ?></th>
			<th><?php echo $this->Paginator->sort('obs'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consultas as $consulta): ?>
	<tr>
		<td><?php echo h($consulta['Consulta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consulta['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $consulta['Pessoa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consulta['Agenda']['id'], array('controller' => 'agendas', 'action' => 'view', $consulta['Agenda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consulta['FormaAtendimento']['id'], array('controller' => 'forma_atendimentos', 'action' => 'view', $consulta['FormaAtendimento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($consulta['TipoAtendimento']['id'], array('controller' => 'tipo_atendimentos', 'action' => 'view', $consulta['TipoAtendimento']['id'])); ?>
		</td>
		<td><?php echo h($consulta['Consulta']['numero']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['obs']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['status']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['created']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consulta['Consulta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consulta['Consulta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consulta['Consulta']['id']), null, __('Are you sure you want to delete # %s?', $consulta['Consulta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consulta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Agendas'), array('controller' => 'agendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agenda'), array('controller' => 'agendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forma Atendimentos'), array('controller' => 'forma_atendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forma Atendimento'), array('controller' => 'forma_atendimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Atendimentos'), array('controller' => 'tipo_atendimentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atendimento'), array('controller' => 'tipo_atendimentos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
