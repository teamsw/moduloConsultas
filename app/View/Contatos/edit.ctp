<div class="contatos form">
<?php echo $this->Form->create('Contato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('telefone');
		echo $this->Form->input('telefoneComercial');
		echo $this->Form->input('ramal');
		echo $this->Form->input('celular');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Contato.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Contato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contatos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
