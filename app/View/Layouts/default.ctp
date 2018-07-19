<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php __('Welcome : '); ?> <?php echo $title_for_layout; ?></title>
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css(array('frontend/bootstrap','frontend/style','frontend/responsive','frontend/validationEngine.jquery'));
			echo $this->Html->script(array('frontend/jquery-1.11.3','frontend/bootstrap','frontend/index','frontend/jquery.validationEngine','frontend/jquery.validationEngine-en'));
			echo $scripts_for_layout;
		?>
	</head>
	<body>
		<div id="wrapper">
			<?php echo $content_for_layout; ?>
			<?php echo $this->element('frontend-footer'); ?>
		</div>
	</body>
</html>


