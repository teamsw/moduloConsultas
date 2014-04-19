<?php echo $this->Form->create('Cliente'); ?>
<section class="superior"> <!---section superior--->

	<header class="titulo">Cadastro de Cliente</header>

<fieldset>
	<legend><?php echo __('Dados Cliente'); ?></legend>

	<section class="coluna-esquerda">
		<?php
			echo $this->Form->input('Pessoa.nome',array('id' =>'pessoaNome_cliente','class' => 'tamanho-medio','label' => 'Nome:'));
			echo $this->Form->input('Pessoa.numeroPronturario',array('id' =>'pessoaNumeroPronturario_cliente','class' => 'tamanho-medio','label' => 'Numero Pronturario:'));
			echo $this->Form->input('Pessoa.escolaridade',array('id' =>'pessoaEscolaridade_cliente','class' => 'tamanho-medio','label' => 'Escolaridade:'));
			echo $this->Form->input('Pessoa.altura',array('id' =>'pessoaAltura_cliente','class' => 'tamanho-medio','label' => 'Altura:'));
			echo $this->Form->input('Pessoa.filiacao',array('id' =>'pessoaFiliacao_cliente','class' => 'tamanho-medio','label' => 'Filiação:'));

		?>
	</section>

	<section class="coluna-central" >
		<?php
			echo $this->Form->input('Pessoa.cpf_cnpj',array('id' =>'pessoaCpfCnpj_cliente','class' => 'tamanho-medio','label' => 'Cpf/Cnpj:'));
			echo $this->Form->input('Pessoa.estadoCivil',array('id' =>'pessoaEstadoCivil_cliente','class' => 'tamanho-medio','label' => 'Estado Civil:'));
			echo $this->Form->input('Pessoa.profissao',array('id' =>'pessoaProfissao_cliente','class' => 'tamanho-medio','label' => 'Profissao:'));
			echo $this->Form->input('Pessoa.sexo',array('id' =>'pessoaSexo_cliente','class' => 'tamanho-medio','label' => 'Sexo:'));
			echo $this->Form->input('Titular',array('id' =>'titular_cliente','label' => 'Titular:','type' => 'select','options' => array('','Sim','Nao')));
		?>
	</section>

	<section class="coluna-direita" >
		<?php
			echo $this->Form->input('Pessoa.rg',array('id' =>'pessoaRg_cliente','class' => 'tamanho-medio','label' => 'Rg:'));
			echo $this->Form->input('Pessoa.dataNascimento',array('id' =>'pessoaDataNascimento_cliente','class' => 'tamanho-medio','label' => 'Data Nascimento:','type' => 'text'));
			echo $this->Form->input('Pessoa.peso',array('id' =>'pessoaPeso_cliente','class' => 'tamanho-medio','label' => 'Peso:'));
			echo $this->Form->input('Pessoa.idade',array('id' =>'pessoaIdade_cliente','class' => 'tamanho-medio','label' => 'Idade:'));

		?>
	</section>

</fieldset>

</section><!---Fim section superior--->


<section> <!---section Inferior--->

	<header></header>

<fieldset>
	<legend><?php echo __('Dados Usuario'); ?></legend>

	<section class="coluna-esquerda">
		<?php
			echo $this->Form->input('User.pessoa_id',array('type' => 'hidden'));
			echo $this->Form->input('User.username',array('id' =>'userUsuario_cliente','class' => 'tamanho-medio','label' => 'Usuario:'));
			echo $this->Form->input('User.password',array('id' =>'userSenha_cliente','class' => 'tamanho-medio','label' => 'Senha:'));
			//echo $this->Form->input('User.status',array('id' =>'userStatus_cliente','class' => 'tamanho-medio','label' => 'Status:'));
		?>
	</section>

	<section class="coluna-central" >
		<?php
			echo $this->Form->input('User.role',array('id' =>'userPermissao_cliente','class' => 'tamanho-medio','label' => 'Permissão:','type' => 'select','options' => array('','admin' => 'Admin', 'user' => 'Usuario')));
		?>
	</section>

	<section class="coluna-direita" >
		<?php
			echo $this->Form->input('User.ativo',array('id' =>'userAtivo_cliente','class' => 'tamanho-medio','label' => 'Ativo:','type' =>'select','options' =>array('','Sim','Não')));
		?>
	</section>

</fieldset>

<footer>
	<input class="bt-salvar" type="submit" value="Salvar">
	<?php
		echo $this->Form->end(); 
	?>
</footer>
</section><!---Fim section Inferior--->
