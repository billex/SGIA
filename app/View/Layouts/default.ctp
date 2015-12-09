<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
    <?php echo $this->element('menutopo');?>
    <?php echo $this->element('head');?>
</head>
<body>
		

	
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
</body>
</html>
