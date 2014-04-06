<div class="funcionarios view">
<h2><?php echo __('Funcionario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($funcionario['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $funcionario['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Registro'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['registro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataAdmissao'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataAdmissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataDemissao'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['dataDemissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulacao'); ?></dt>
		<dd>
			<?php echo h($funcionario['Funcionario']['titulacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Funcionario'), array('action' => 'edit', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Funcionario'), array('action' => 'delete', $funcionario['Funcionario']['id']), null, __('Are you sure you want to delete # %s?', $funcionario['Funcionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
