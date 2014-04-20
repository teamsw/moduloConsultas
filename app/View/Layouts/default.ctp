<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('menu');
		echo $this->Html->css('principal');
		echo $this->Html->css('bt-salvar');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->css('bootstrap');
		echo $this->Html->script('bootstrap');
		echo $this->fetch('script');
	?>
</head>
<body>
	<header id="topo"></header>
		<nav>
			<ul id="menu">				
				<div id="nomeUsuario">
					<?php if($logged_in): ?>
						Bem-vindo <?php echo $current_user['username']; ?>
					<?php endif; ?>  
				</div>

				<li id="primeiro">
					<a href="#">Home</a>
				</li>

				<li>
				<span>Agenda</span>
				<ol>
					<li><a href="<?php echo $this->html->url(array('controller' => '','action' => 'add')); ?>">link1</a></li>
					<li><a href="<?php echo $this->html->url(array('controller' => '','action' => 'add')); ?>">link2</a></li>
					<li><a href="<?php echo $this->html->url(array('controller' => '','action' => 'add')); ?>">link3</a></li>
				</ol>
				</li>

			<!--
				<li>
				<a href="#">Segundo</a>
				</li>
			-->

				<li>
				<span>Consultas</span>
				<ol>
					<li><a href="#">Link 6</a></li>
					<li><a href="#">Link 7</a></li>
					<li><a href="#">Link 8</a></li>
				</ol>

				</li>
			<!--
				<li><a href="#">Quarto</a></li>
			-->

				<li class="selected">
				<span>Cadastro</span>
				<ol>
					<li><a href="<?php echo $this->html->url(array('controller' => 'users','action' => 'add')); ?>">Usuarios</a></li>
					<li><a href="<?php echo $this->html->url(array('controller' => 'funcionarios','action' => 'add')); ?>">Funcionarios</a></li>
					<li><a href="<?php echo $this->html->url(array('controller' => 'clientes','action' => 'add')); ?>">Clientes</a></li>
				</ol>
				</li>
				
				<li>
				<?php if($logged_in): ?>
	            	<?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
	            <?php else: ?>
	                <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
	            <?php endif; ?>  

				</li>

			</ul>
		</nav>

	<section id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</section>
</body>
</html>
