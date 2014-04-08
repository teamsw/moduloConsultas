<?php
	$cakeDescription = __d('consultas', 'Consultas');
?>

<!DOCTYPE html>
<html>
<head>
	
<script>
	var urlInicio = '<?php echo Router::url("/", true)?>';
</script>	

	
	
	<?php echo $this->Html->charset(); ?>
	
	<title>		
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>	
	</title>
	
	<?php
	
	?>
</head>

<body>
	<section class="menuTopo">Menu</section>
	
	<section class="corpoIndex">
			<?php 
				echo $this->Session->flash();
				echo $this->fetch('content');
			?>		
	</section><!-- conteudo-principal -->	
</body>
</html>
