<div class="tipoAtendimentos view">
<h2><?php echo __('Tipo Atendimento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tipoAtendimento['Consulta']['id'], array('controller' => 'consultas', 'action' => 'view', $tipoAtendimento['Consulta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SubNome'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['subNome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arquivo'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['arquivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($tipoAtendimento['TipoAtendimento']['valor']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Atendimento'), array('action' => 'edit', $tipoAtendimento['TipoAtendimento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Atendimento'), array('action' => 'delete', $tipoAtendimento['TipoAtendimento']['id']), null, __('Are you sure you want to delete # %s?', $tipoAtendimento['TipoAtendimento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Atendimentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atendimento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Consultas'); ?></h3>
	<?php if (!empty($tipoAtendimento['Consulta'])): ?>
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
	<?php foreach ($tipoAtendimento['Consulta'] as $consulta): ?>
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
