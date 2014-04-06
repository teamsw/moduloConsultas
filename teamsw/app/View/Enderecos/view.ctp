<div class="enderecos view">
<h2><?php echo __('Endereco'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pessoa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($endereco['Pessoa']['id'], array('controller' => 'pessoas', 'action' => 'view', $endereco['Pessoa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logradouro'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['logradouro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Complemento'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['complemento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cidade'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['cidade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cep'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['cep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obs'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['obs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($endereco['Endereco']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Endereco'), array('action' => 'edit', $endereco['Endereco']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Endereco'), array('action' => 'delete', $endereco['Endereco']['id']), null, __('Are you sure you want to delete # %s?', $endereco['Endereco']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Enderecos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Endereco'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
