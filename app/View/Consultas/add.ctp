<div class="consultas form">
<?php echo $this->Form->create('Consulta'); ?>
	<fieldset>
		<legend><?php echo __('Add Consulta'); ?></legend>
	<?php
		echo $this->Form->input('pessoa_id');
		echo $this->Form->input('agenda_id');
		echo $this->Form->input('forma_atendimento_id');
		echo $this->Form->input('tipo_atendimento_id');
		echo $this->Form->input('numero');
		echo $this->Form->input('obs');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?></li>
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
