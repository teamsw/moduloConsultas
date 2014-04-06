<div class="contatos view">
<h2><?php echo __('Contato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contato['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $contato['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefone'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['telefone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelefoneComercial'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['telefoneComercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ramal'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['ramal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contato['Contato']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contato'), array('action' => 'edit', $contato['Contato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contato'), array('action' => 'delete', $contato['Contato']['id']), null, __('Are you sure you want to delete # %s?', $contato['Contato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
