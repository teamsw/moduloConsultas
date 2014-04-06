<div class="agendas view">
<h2><?php echo __('Agenda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agenda['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $agenda['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($agenda['Consulta']['id'], array('controller' => 'consultas', 'action' => 'view', $agenda['Consulta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['bloqueado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($agenda['Agenda']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Agenda'), array('action' => 'edit', $agenda['Agenda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Agenda'), array('action' => 'delete', $agenda['Agenda']['id']), null, __('Are you sure you want to delete # %s?', $agenda['Agenda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Agendas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agenda'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consultas'); ?></h3>
	<?php if (!empty($agenda['Consulta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Agenda Id'); ?></th>
		<th><?php echo __('Forma Atendimento Id'); ?></th>
		<th><?php echo __('Tipo Atendimento Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($agenda['Consulta'] as $consulta): ?>
		<tr>
			<td><?php echo $consulta['id']; ?></td>
			<td><?php echo $consulta['pessoa_id']; ?></td>
			<td><?php echo $consulta['agenda_id']; ?></td>
			<td><?php echo $consulta['forma_atendimento_id']; ?></td>
			<td><?php echo $consulta['tipo_atendimento_id']; ?></td>
			<td><?php echo $consulta['numero']; ?></td>
			<td><?php echo $consulta['obs']; ?></td>
			<td><?php echo $consulta['status']; ?></td>
			<td><?php echo $consulta['created']; ?></td>
			<td><?php echo $consulta['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consultas', 'action' => 'view', $consulta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consultas', 'action' => 'edit', $consulta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consultas', 'action' => 'delete', $consulta['id']), null, __('Are you sure you want to delete # %s?', $consulta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
