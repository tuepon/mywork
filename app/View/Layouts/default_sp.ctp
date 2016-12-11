<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>掲示板システム for スマホ</title>
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
						<h1>スマホ用掲示板システム</h1>
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
