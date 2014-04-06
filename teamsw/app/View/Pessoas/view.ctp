<div class="pessoas view">
<h2><?php echo __('Pessoa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf Cnpj'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['cpf_cnpj']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rg'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['rg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NumeroPronturario'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['numeroPronturario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EstadoCivil'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['estadoCivil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataNascimento'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['dataNascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Escolaridade'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['escolaridade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profissao'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['profissao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Altura'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['altura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idade'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['idade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filiacao'); ?></dt>
		<dd>
			<?php echo h($pessoa['Pessoa']['filiacao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pessoa'), array('action' => 'edit', $pessoa['Pessoa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pessoa'), array('action' => 'delete', $pessoa['Pessoa']['id']), null, __('Are you sure you want to delete # %s?', $pessoa['Pessoa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pessoas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pessoa'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Agendas'); ?></h3>
	<?php if (!empty($pessoa['Agenda'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Consulta Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Bloqueado'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['Agenda'] as $agenda): ?>
		<tr>
			<td><?php echo $agenda['id']; ?></td>
			<td><?php echo $agenda['pessoa_id']; ?></td>
			<td><?php echo $agenda['consulta_id']; ?></td>
			<td><?php echo $agenda['data']; ?></td>
			<td><?php echo $agenda['bloqueado']; ?></td>
			<td><?php echo $agenda['status']; ?></td>
			<td><?php echo $agenda['created']; ?></td>
			<td><?php echo $agenda['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'agendas', 'action' => 'view', $agenda['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'agendas', 'action' => 'edit', $agenda['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'agendas', 'action' => 'delete', $agenda['id']), null, __('Are you sure you want to delete # %s?', $agenda['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Agenda'), array('controller' => 'agendas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Consultas'); ?></h3>
	<?php if (!empty($pessoa['Consulta'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Agenda Id'); ?></th>
		<th><?php echo __('Forma Atendimento Id'); ?></th>
		<th><?php echo __('Tipo Atendimento Id'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['Consulta'] as $consulta): ?>
		<tr>
			<td><?php echo $consulta['id']; ?></td>
			<td><?php echo $consulta['pessoa_id']; ?></td>
			<td><?php echo $consulta['agenda_id']; ?></td>
			<td><?php echo $consulta['forma_atendimento_id']; ?></td>
			<td><?php echo $consulta['tipo_atendimento_id']; ?></td>
			<td><?php echo $consulta['numero']; ?></td>
			<td><?php echo $consulta['obs']; ?></td>
			<td><?php echo $consulta['status']; ?></td>
			<td><?php echo $consulta['created']; ?></td>
			<td><?php echo $consulta['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'consultas', 'action' => 'view', $consulta['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'consultas', 'action' => 'edit', $consulta['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'consultas', 'action' => 'delete', $consulta['id']), null, __('Are you sure you want to delete # %s?', $consulta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Consulta'), array('controller' => 'consultas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Contatos'); ?></h3>
	<?php if (!empty($pessoa['Contato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('TelefoneComercial'); ?></th>
		<th><?php echo __('Ramal'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['Contato'] as $contato): ?>
		<tr>
			<td><?php echo $contato['id']; ?></td>
			<td><?php echo $contato['pessoa_id']; ?></td>
			<td><?php echo $contato['telefone']; ?></td>
			<td><?php echo $contato['telefoneComercial']; ?></td>
			<td><?php echo $contato['ramal']; ?></td>
			<td><?php echo $contato['celular']; ?></td>
			<td><?php echo $contato['fax']; ?></td>
			<td><?php echo $contato['email']; ?></td>
			<td><?php echo $contato['created']; ?></td>
			<td><?php echo $contato['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contatos', 'action' => 'view', $contato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contatos', 'action' => 'edit', $contato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contatos', 'action' => 'delete', $contato['id']), null, __('Are you sure you want to delete # %s?', $contato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contato'), array('controller' => 'contatos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Enderecos'); ?></h3>
	<?php if (!empty($pessoa['Endereco'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Logradouro'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Complemento'); ?></th>
		<th><?php echo __('Bairro'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Obs'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['Endereco'] as $endereco): ?>
		<tr>
			<td><?php echo $endereco['id']; ?></td>
			<td><?php echo $endereco['pessoa_id']; ?></td>
			<td><?php echo $endereco['logradouro']; ?></td>
			<td><?php echo $endereco['numero']; ?></td>
			<td><?php echo $endereco['complemento']; ?></td>
			<td><?php echo $endereco['bairro']; ?></td>
			<td><?php echo $endereco['cidade']; ?></td>
			<td><?php echo $endereco['estado']; ?></td>
			<td><?php echo $endereco['cep']; ?></td>
			<td><?php echo $endereco['obs']; ?></td>
			<td><?php echo $endereco['created']; ?></td>
			<td><?php echo $endereco['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'enderecos', 'action' => 'view', $endereco['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'enderecos', 'action' => 'edit', $endereco['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'enderecos', 'action' => 'delete', $endereco['id']), null, __('Are you sure you want to delete # %s?', $endereco['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Endereco'), array('controller' => 'enderecos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Especialidades'); ?></h3>
	<?php if (!empty($pessoa['Especialidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Consulta Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['Especialidade'] as $especialidade): ?>
		<tr>
			<td><?php echo $especialidade['id']; ?></td>
			<td><?php echo $especialidade['pessoa_id']; ?></td>
			<td><?php echo $especialidade['consulta_id']; ?></td>
			<td><?php echo $especialidade['nome']; ?></td>
			<td><?php echo $especialidade['descricao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'especialidades', 'action' => 'view', $especialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'especialidades', 'action' => 'edit', $especialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'especialidades', 'action' => 'delete', $especialidade['id']), null, __('Are you sure you want to delete # %s?', $especialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($pessoa['Funcionario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Registro'); ?></th>
		<th><?php echo __('DataAdmissao'); ?></th>
		<th><?php echo __('DataDemissao'); ?></th>
		<th><?php echo __('Titulacao'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['Funcionario'] as $funcionario): ?>
		<tr>
			<td><?php echo $funcionario['id']; ?></td>
			<td><?php echo $funcionario['pessoa_id']; ?></td>
			<td><?php echo $funcionario['registro']; ?></td>
			<td><?php echo $funcionario['dataAdmissao']; ?></td>
			<td><?php echo $funcionario['dataDemissao']; ?></td>
			<td><?php echo $funcionario['titulacao']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'funcionarios', 'action' => 'view', $funcionario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']), null, __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($pessoa['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pessoa Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Ativo'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pessoa['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['pessoa_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['ativo']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
