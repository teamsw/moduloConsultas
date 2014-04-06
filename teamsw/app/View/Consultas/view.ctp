<div class="consultas view">
<h2><?php echo __('Consulta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $consulta['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agenda'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['Agenda']['id'], array('controller' => 'agendas', 'action' => 'view', $consulta['Agenda']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Forma Atendimento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['FormaAtendimento']['id'], array('controller' => 'forma_atendimentos', 'action' => 'view', $consulta['FormaAtendimento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Atendimento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['TipoAtendimento']['id'], array('controller' => 'tipo_atendimentos', 'action' => 'view', $consulta['TipoAtendimento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consulta'), array('action' => 'edit', $consulta['Consulta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consulta'), array('action' => 'delete', $consulta['Consulta']['id']), null, __('Are you sure you want to delete # %s?', $consulta['Consulta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Agendas'); ?></h3>
	<?php if (!empty($consulta['Agenda'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Consulta Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consulta['Agenda'] as $agenda): ?>
		<tr>
			<td><?php echo $agenda['id']; ?></td>
			<td><?php echo $agenda['pessoa_id']; ?></td>
			<td><?php echo $agenda['consulta_id']; ?></td>
			<td><?php echo $agenda['data']; ?></td>
			<td><?php echo $agenda['bloqueado']; ?></td>
			<td><?php echo $agenda['status']; ?></td>
			<td><?php echo $agenda['created']; ?></td>
			<td><?php echo $agenda['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'agendas', 'action' => 'view', $agenda['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'agendas', 'action' => 'edit', $agenda['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'agendas', 'action' => 'delete', $agenda['id']), null, __('Are you sure you want to delete # %s?', $agenda['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Agenda'), array('controller' => 'agendas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Especialidades'); ?></h3>
	<?php if (!empty($consulta['Especialidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Consulta Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consulta['Especialidade'] as $especialidade): ?>
		<tr>
			<td><?php echo $especialidade['id']; ?></td>
			<td><?php echo $especialidade['pessoa_id']; ?></td>
			<td><?php echo $especialidade['consulta_id']; ?></td>
			<td><?php echo $especialidade['nome']; ?></td>
			<td><?php echo $especialidade['descricao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'especialidades', 'action' => 'view', $especialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'especialidades', 'action' => 'edit', $especialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'especialidades', 'action' => 'delete', $especialidade['id']), null, __('Are you sure you want to delete # %s?', $especialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Forma Atendimentos'); ?></h3>
	<?php if (!empty($consulta['FormaAtendimento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Consulta Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Convenio'); ?></th>
		<th><?php echo __('Plano'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consulta['FormaAtendimento'] as $formaAtendimento): ?>
		<tr>
			<td><?php echo $formaAtendimento['id']; ?></td>
			<td><?php echo $formaAtendimento['consulta_id']; ?></td>
			<td><?php echo $formaAtendimento['tipo']; ?></td>
			<td><?php echo $formaAtendimento['convenio']; ?></td>
			<td><?php echo $formaAtendimento['plano']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'forma_atendimentos', 'action' => 'view', $formaAtendimento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'forma_atendimentos', 'action' => 'edit', $formaAtendimento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'forma_atendimentos', 'action' => 'delete', $formaAtendimento['id']), null, __('Are you sure you want to delete # %s?', $formaAtendimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Forma Atendimento'), array('controller' => 'forma_atendimentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tipo Atendimentos'); ?></h3>
	<?php if (!empty($consulta['TipoAtendimento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Consulta Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('SubNome'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Arquivo'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consulta['TipoAtendimento'] as $tipoAtendimento): ?>
		<tr>
			<td><?php echo $tipoAtendimento['id']; ?></td>
			<td><?php echo $tipoAtendimento['consulta_id']; ?></td>
			<td><?php echo $tipoAtendimento['nome']; ?></td>
			<td><?php echo $tipoAtendimento['subNome']; ?></td>
			<td><?php echo $tipoAtendimento['tipo']; ?></td>
			<td><?php echo $tipoAtendimento['descricao']; ?></td>
			<td><?php echo $tipoAtendimento['arquivo']; ?></td>
			<td><?php echo $tipoAtendimento['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipo_atendimentos', 'action' => 'view', $tipoAtendimento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipo_atendimentos', 'action' => 'edit', $tipoAtendimento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipo_atendimentos', 'action' => 'delete', $tipoAtendimento['id']), null, __('Are you sure you want to delete # %s?', $tipoAtendimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipo Atendimento'), array('controller' => 'tipo_atendimentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
