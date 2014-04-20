<div class="users form">
<?php echo $this->Form->create('User'); ?>

<section class="superior"> <!---section superior--->

	<header class="titulo">Cadastro de Usuarios</header>

	<fieldset>
		<legend><?php echo __('Dados Usuario'); ?></legend>
		<section class="coluna-esquerda">
			<?php
				echo $this->Form->input('username',array('id' =>'userUsername','class' => 'tamanho-medio','label' => 'Login:'));
				echo $this->Form->input('password',array('id' =>'userPassword','class' => 'tamanho-medio','label' => 'Senha:'));
			?>
		</section>

		<section class="coluna-central" >
			<?php
				echo $this->Form->input('role',array('id' =>'userRole','class' => 'tamanho-medio','label' => 'Permissao:','type' => 'select','options' => array('','admin' => 'Admin', 'user' => 'Usuario')));
				echo $this->Form->input('ativo',array('id' =>'userAtivo','class' => 'tamanho-medio','label' => 'Ativo:','type' => 'select','options' => array('' => '','0' => 'Sim','1' => 'Nao')));
			?>
		</section>

		<section class="coluna-direita" >
			<?php
				echo $this->Form->input('status',array('id' =>'userStatus','class' => 'tamanho-medio','label' => 'Status:'));
			?>
		</section>
	</fieldset>

</section>	

<footer>
	<input class="bt-salvar" type="submit" value="Salvar">
	<?php
		echo $this->Form->end(); 
	?>
</footer>
</div>