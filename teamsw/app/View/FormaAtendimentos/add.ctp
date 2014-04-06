<div class="formaAtendimentos form">
<?php echo $this->Form->create('FormaAtendimento'); ?>
	<fieldset>
		<legend><?php echo __('Add Forma Atendimento'); ?></legend>
	<?php
		echo $this->Form->input('consulta_id');
		echo $this->Form->input('tipo');
		echo $this->Form->input('convenio');
		echo $this->Form->input('plano');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Forma Atendimentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
