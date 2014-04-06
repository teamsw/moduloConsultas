<div class="dependentes view">
<h2><?php echo __('Dependente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dependente['Dependente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dependente['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $dependente['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dependente'), array('action' => 'edit', $dependente['Dependente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dependente'), array('action' => 'delete', $dependente['Dependente']['id']), null, __('Are you sure you want to delete # %s?', $dependente['Dependente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
