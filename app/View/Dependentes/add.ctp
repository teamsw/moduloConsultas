<!--<div class="dependentes form"> -->
<?php echo $this->Form->create('Dependente'); ?>
	<fieldset>
		<legend><?php echo __('Dependente'); ?></legend>
	<?php
		//echo $this->Form->input('cliente_id');
	?>
	</fieldset>

	<!--Cadastro Pessoa -->
	<fieldset>
		<legend><?php echo __('Pessoa'); ?></legend>
	<?php
		echo $this->Form->input('Pessoa.nome',array('id' =>'pessoaNome_dependente','label' => 'Nome:'));
		echo $this->Form->input('Pessoa.cpf_cnpj',array('id' =>'pessoaCpfCnpj_dependente','label' => 'Cpf/Cnpj:'));
		echo $this->Form->input('Pessoa.rg',array('id' =>'pessoaRg_dependente','label' => 'Rg:'));
		echo $this->Form->input('Pessoa.numeroPronturario',array('id' =>'pessoaNumeroPronturario_dependente','label' => 'Numero Pronturario:'));
		echo $this->Form->input('Pessoa.estadoCivil',array('id' =>'pessoaEstadoCivil_dependente','label' => 'Estado Civil:'));
		echo $this->Form->input('Pessoa.dataNascimento',array('id' =>'pessoaDataNascimento_dependente','label' => 'Data Nascimento:'));
		echo $this->Form->input('Pessoa.escolaridade',array('id' =>'pessoaEscolaridade_dependente','label' => 'Escolaridade:'));
		echo $this->Form->input('Pessoa.profissao',array('id' =>'pessoaProfissao_dependente','label' => 'Profissao:'));
		echo $this->Form->input('Pessoa.peso',array('id' =>'pessoaPeso_dependente','label' => 'Peso:'));
		echo $this->Form->input('Pessoa.altura',array('id' =>'pessoaAltura_dependente','label' => 'Altura:'));
		echo $this->Form->input('Pessoa.sexo',array('id' =>'pessoaSexo_dependente','label' => 'Sexo:'));
		echo $this->Form->input('Pessoa.idade',array('id' =>'pessoaIdade_dependente','label' => 'Idade:'));
		echo $this->Form->input('Pessoa.filiacao',array('id' =>'pessoaFiliacao_dependente','label' => 'Filiação:'));
	?>
	</fieldset>

	<!--Cadastro Usuario -->
	<fieldset>
		<legend><?php echo __('User'); ?></legend>
	<?php
		//echo $this->Form->input('pessoa_id');
		echo $this->Form->input('User.username',array('id' =>'userUsuario_dependente','label' => 'Usuario:'));
		echo $this->Form->input('User.password',array('id' =>'userSenha_dependente','label' => 'Senha:'));
		echo $this->Form->input('User.role',array('id' =>'userPermissao_dependente','label' => 'Permissão:'));
		echo $this->Form->input('User.ativo',array('id' =>'userAtivo_dependente','label' => 'Ativo:'));
		echo $this->Form->input('User.status',array('id' =>'userStatus_dependente','label' => 'Status:'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>

<!--</div>-->

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List dependentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
