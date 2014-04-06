<div class="tipoAtendimentos form">
<?php echo $this->Form->create('TipoAtendimento'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Atendimento'); ?></legend>
	<?php
		echo $this->Form->input('consulta_id');
		echo $this->Form->input('nome');
		echo $this->Form->input('subNome');
		echo $this->Form->input('tipo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('arquivo');
		echo $this->Form->input('valor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Atendimentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
	</ul>
</div>
