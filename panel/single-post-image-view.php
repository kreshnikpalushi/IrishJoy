<?php
    require_once('functions.php');

    sec_session_start();
    if (login_check($mysqli) == false) {
         header('Location: ' . MAIN_URL);
    }

	$post_id = $_GET['p_id'];	 
?>

<html>
	<head>
		<title>View Image</title>
		<?php header_requires(); ?>
	</head>
	<body>
		<div class="head"></div>
		<div class="container">
			<div class="content">
				<?php 
					view_single_post_image_menu($mysqli,$post_id);	 
					view_single_post_image($mysqli,$post_id);
				?>
			</div>
			<div class="sidebar_right">	
				<div class="menu_bar">
					<?php show_panel_menu(); ?>
				</div>
			</div>
		</div>
	</body>
</html>