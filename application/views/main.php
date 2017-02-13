<html>
<head>
    <title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/window.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/layout.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
</head>
<body>

	<script src="<?php echo base_url(); ?>js/library/jquery-3.1.0.js"></script>
	<script src="<?php echo base_url(); ?>js/library/jquery-migrate-3.0.0.js"></script>
	<script src="<?php echo base_url(); ?>js/library/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url(); ?>js/library/jquery-ui-1.11.4/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>js/library/jTemplates_0_8_4/jTemplates/jquery-jtemplates_uncompressed.js"></script>
	<script src="<?php echo base_url(); ?>js/library/log4javascript-1.4.13/log4javascript_uncompressed.js"></script>

	<script src="<?php echo base_url(); ?>js/utilities.js"></script>
  <script src="<?php echo base_url(); ?>js/render.js"></script>

  <div id='test_container'></div>

	<div id='main_container' class='main-container'>
    <div class="menu_container" id="menu-container">
			<?php echo $menu;?>
		</div>
		<div id='left_container' class='left-container'>
			<?php echo $left;?>
		</div>
		<div id='content_container' class='content-container'>
			<?php echo $content;?>
		</div>
		<div id='right_container' class='right-container'>
			<?php echo $right;?>
		</div>
		<div id='input_container' class='input-container'>
			<?php echo $input;?>
		</div>
	</div>
</body>

<script src="<?php echo base_url(); ?>js/test_controller.js"></script>
<script>
  window.testController.main.init('abcde');
</script>
</html>
