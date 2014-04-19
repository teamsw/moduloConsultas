<!DOCTYPE html>
<html>
<head>
<title>
	<?php 
		echo $cakeDescription;
		echo $title_for_layout;
	?>
</title>
</head>

<body>
	<header></header>
	<section>
		<?php
			echo $this->Session->flash();
			echo $this->fetch('content');
		?>
	</section>	

</body> 

</html>