<!--
<div class="funcionarios form">
-->
<?php echo $this->Form->create('Funcionario'); ?>
	<fieldset>
		<legend><?php echo __('Add Funcionario'); ?></legend>
	<?php
		echo $this->Form->input('registro',array('id' =>'registro_funcionario','label' => 'Registro:'));
		echo $this->Form->input('dataAdmissao',array('id' =>'dataAdmissao_funcionario','label' => 'Admissao:'));
		echo $this->Form->input('dataDemissao',array('id' =>'dataDemissao_funcionario','label' => 'Demissao:'));
		echo $this->Form->input('titulacao',array('id' =>'titulacao_funcionario','label' => 'Titulação:'));
	?>
	</fieldset>

		<!--Cadastro Pessoa -->
	<fieldset>
		<legend><?php echo __('Pessoa'); ?></legend>
	<?php
		echo $this->Form->input('Pessoa.nome',array('id' =>'pessoaNome_funcionario','label' => 'Nome:'));
		echo $this->Form->input('Pessoa.cpf_cnpj',array('id' =>'pessoaCpfCnpj_funcionario','label' => 'Cpf/Cnpj:'));
		echo $this->Form->input('Pessoa.rg',array('id' =>'pessoaRg_funcionario','label' => 'Rg:'));
		echo $this->Form->input('Pessoa.numeroPronturario',array('id' =>'pessoaNumeroPronturario_funcionario','label' => 'Numero Pronturario:'));
		echo $this->Form->input('Pessoa.estadoCivil',array('id' =>'pessoaEstadoCivil_funcionario','label' => 'Estado Civil:'));
		echo $this->Form->input('Pessoa.dataNascimento',array('id' =>'pessoaDataNascimento_funcionario','label' => 'Data Nascimento:'));
		echo $this->Form->input('Pessoa.escolaridade',array('id' =>'pessoaEscolaridade_funcionario','label' => 'Escolaridade:'));
		echo $this->Form->input('Pessoa.profissao',array('id' =>'pessoaProfissao_funcionario','label' => 'Profissao:'));
		echo $this->Form->input('Pessoa.peso',array('id' =>'pessoaPeso_funcionario','label' => 'Peso:'));
		echo $this->Form->input('Pessoa.altura',array('id' =>'pessoaAltura_funcionario','label' => 'Altura:'));
		echo $this->Form->input('Pessoa.sexo',array('id' =>'pessoaSexo_funcionario','label' => 'Sexo:'));
		echo $this->Form->input('Pessoa.idade',array('id' =>'pessoaIdade_funcionario','label' => 'Idade:'));
		echo $this->Form->input('Pessoa.filiacao',array('id' =>'pessoaFiliacao_funcionario','label' => 'Filiação:'));
	?>
	</fieldset>

	<!--Cadastro Usuario -->
	<fieldset>
		<legend><?php echo __('User'); ?></legend>
	<?php
		echo $this->Form->input('User.pessoa_id',array('type' => 'hidden'));
		echo $this->Form->input('User.username',array('id' =>'userUsuario_funcionario','label' => 'Usuario:'));
		echo $this->Form->input('User.password',array('id' =>'userSenha_funcionario','label' => 'Senha:'));
		echo $this->Form->input('User.role',array('id' =>'userPermissao_funcionario','label' => 'Permissão:'));
		echo $this->Form->input('User.ativo',array('id' =>'userAtivo_funcionario','label' => 'Ativo:'));
		echo $this->Form->input('User.status',array('id' =>'userStatus_funcionario','label' => 'Status:'));
	?>
	</fieldset>

<?php echo $this->Form->end(__('Submit')); ?>


<!--
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Funcionarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('controller' => 'pessoas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('controller' => 'pessoas', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
