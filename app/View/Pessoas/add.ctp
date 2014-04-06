<div class="pessoas form">
<?php echo $this->Form->create('Pessoa'); ?>
	<fieldset>
		<legend><?php echo __('Add Pessoa'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf_cnpj');
		echo $this->Form->input('rg');
		echo $this->Form->input('numeroPronturario');
		echo $this->Form->input('estadoCivil');
		echo $this->Form->input('dataNascimento');
		echo $this->Form->input('escolaridade');
		echo $this->Form->input('profissao');
		echo $this->Form->input('peso');
		echo $this->Form->input('altura');
		echo $this->Form->input('sexo');
		echo $this->Form->input('idade');
		echo $this->Form->input('filiacao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pessoas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Agendas'), array('controller' => 'agendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Agenda'), array('controller' => 'agendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('controller' => 'consultas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contatos'), array('controller' => 'contatos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contato'), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Enderecos'), array('controller' => 'enderecos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Endereco'), array('controller' => 'enderecos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
