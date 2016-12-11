<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>さきかなお問合せフォームSP</title>
	<?php
	 		echo $this->Html->meta('icon');

			echo $this->Html->css('cake.generic');
			echo $this->Html->css('original_sp');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
	?>
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
		<div id="container">
				<div id="header">
						<h1>さきかなお問合せフォームSP</h1>
				</div>
				<div id="content">

						<?php echo $this->Flash->render(); ?>

						<?php echo $this->fetch('content'); ?>
				</div>
				<div id="footer">
				Version 0.1(SP)
				</div>
		</div>
</body>
</html>
