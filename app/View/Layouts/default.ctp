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
			<li>
			<a href="#">Home</a>
			</li>

			<li>
			<span>Agenda</span>
			<ol>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
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
				<li><a href="#">Link 9</a></li>
				<li><a href="#">Link 10</a></li>
				<li><a href="#">Link 11</a></li>
				<li><a href="#">Link 12</a></li>
				<li><a href="#">Link 13</a></li>
			</ol>
			</li>
		</ul>
	</nav>

	<section id="content">

		<?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>
	</section>
</body>
</html>
