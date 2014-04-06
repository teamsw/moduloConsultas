<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['User']['id'], array('controller' => 'users', 'action' => 'view', $cliente['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titular'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['Titular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bloqueado'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['bloqueado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), null, __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependentes'), array('controller' => 'dependentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependente'), array('controller' => 'dependentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dependentes'); ?></h3>
	<?php if (!empty($cliente['Dependente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Dependente'] as $dependente): ?>
		<tr>
			<td><?php echo $dependente['id']; ?></td>
			<td><?php echo $dependente['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dependentes', 'action' => 'view', $dependente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dependentes', 'action' => 'edit', $dependente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dependentes', 'action' => 'delete', $dependente['id']), null, __('Are you sure you want to delete # %s?', $dependente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dependente'), array('controller' => 'dependentes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
