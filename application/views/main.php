<html>
<head>
        <title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/window.css">
</head>
<body>
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
</html>
