<!--<div class="clientes form">-->
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Cliente'); ?></legend>
	<?php
		echo $this->Form->input('Titular',array('id' =>'titular_cliente','label' => 'Titular:'));
		echo $this->Form->input('bloqueado',array('id' =>'bloquado_cliente','label' => 'Blooqueado:'));
	?>
	</fieldset>

	<!--Cadastro Pessoa -->
	<fieldset>
		<legend><?php echo __('Pessoa'); ?></legend>
	<?php
		echo $this->Form->input('Pessoa.nome',array('id' =>'pessoaNome_cliente','label' => 'Nome:'));
		echo $this->Form->input('Pessoa.cpf_cnpj',array('id' =>'pessoaCpfCnpj_cliente','label' => 'Cpf/Cnpj:'));
		echo $this->Form->input('Pessoa.rg',array('id' =>'pessoaRg_cliente','label' => 'Rg:'));
		echo $this->Form->input('Pessoa.numeroPronturario',array('id' =>'pessoaNumeroPronturario_cliente','label' => 'Numero Pronturario:'));
		echo $this->Form->input('Pessoa.estadoCivil',array('id' =>'pessoaEstadoCivil_cliente','label' => 'Estado Civil:'));
		echo $this->Form->input('Pessoa.dataNascimento',array('id' =>'pessoaDataNascimento_cliente','label' => 'Data Nascimento:'));
		echo $this->Form->input('Pessoa.escolaridade',array('id' =>'pessoaEscolaridade_cliente','label' => 'Escolaridade:'));
		echo $this->Form->input('Pessoa.profissao',array('id' =>'pessoaProfissao_cliente','label' => 'Profissao:'));
		echo $this->Form->input('Pessoa.peso',array('id' =>'pessoaPeso_cliente','label' => 'Peso:'));
		echo $this->Form->input('Pessoa.altura',array('id' =>'pessoaAltura_cliente','label' => 'Altura:'));
		echo $this->Form->input('Pessoa.sexo',array('id' =>'pessoaSexo_cliente','label' => 'Sexo:'));
		echo $this->Form->input('Pessoa.idade',array('id' =>'pessoaIdade_cliente','label' => 'Idade:'));
		echo $this->Form->input('Pessoa.filiacao',array('id' =>'pessoaFiliacao_cliente','label' => 'Filiação:'));
	?>
	</fieldset>

	<!--Cadastro Usuario -->
	<fieldset>
		<legend><?php echo __('User'); ?></legend>
	<?php
		echo $this->Form->input('User.pessoa_id',array('type' => 'hidden'));
		echo $this->Form->input('User.username',array('id' =>'userUsuario_cliente','label' => 'Usuario:'));
		echo $this->Form->input('User.password',array('id' =>'userSenha_cliente','label' => 'Senha:'));
		echo $this->Form->input('User.role',array('id' =>'userPermissao_cliente','label' => 'Permissão:'));
		echo $this->Form->input('User.ativo',array('id' =>'userAtivo_cliente','label' => 'Ativo:'));
		echo $this->Form->input('User.status',array('id' =>'userStatus_cliente','label' => 'Status:'));
	?>
	</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>
<!--
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
