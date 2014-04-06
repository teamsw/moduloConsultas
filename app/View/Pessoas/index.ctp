<div class="pessoas index">
	<h2><?php echo __('Pessoas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf_cnpj'); ?></th>
			<th><?php echo $this->Paginator->sort('rg'); ?></th>
			<th><?php echo $this->Paginator->sort('numeroPronturario'); ?></th>
			<th><?php echo $this->Paginator->sort('estadoCivil'); ?></th>
			<th><?php echo $this->Paginator->sort('dataNascimento'); ?></th>
			<th><?php echo $this->Paginator->sort('escolaridade'); ?></th>
			<th><?php echo $this->Paginator->sort('profissao'); ?></th>
			<th><?php echo $this->Paginator->sort('peso'); ?></th>
			<th><?php echo $this->Paginator->sort('altura'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('idade'); ?></th>
			<th><?php echo $this->Paginator->sort('filiacao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoas as $pessoa): ?>
	<tr>
		<td><?php echo h($pessoa['Pessoa']['id']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['nome']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['cpf_cnpj']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['rg']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['numeroPronturario']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['estadoCivil']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['dataNascimento']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['escolaridade']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['profissao']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['peso']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['altura']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['created']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['modified']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['idade']); ?>&nbsp;</td>
		<td><?php echo h($pessoa['Pessoa']['filiacao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pessoa['Pessoa']['id']), null, __('Are you sure you want to delete # %s?', $pessoa['Pessoa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('action' => 'add')); ?></li>
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
