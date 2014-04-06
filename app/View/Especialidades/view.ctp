<div class="especialidades view">
<h2><?php echo __('Especialidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($especialidade['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $especialidade['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consulta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($especialidade['Consulta']['id'], array('controller' => 'consultas', 'action' => 'view', $especialidade['Consulta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Especialidade'), array('action' => 'edit', $especialidade['Especialidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Especialidade'), array('action' => 'delete', $especialidade['Especialidade']['id']), null, __('Are you sure you want to delete # %s?', $especialidade['Especialidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
