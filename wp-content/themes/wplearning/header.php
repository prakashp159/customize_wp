<?php

/*

* This template is used display header.

*/

?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>

		<?php echo get_the_title(); ?> |
	 	<?php bloginfo('name') ?>
	 	
	 </title>
	 <?php wp_head() ?>
</head>
<body>

	<div class="site-main container">
		<header class="site-header">
			
			<div class="site-branding">
				<a href="<? php bloginfo('url') ?>">
					<?php the_custom_logo() ?>
				</a>
			</div>

		</header>

		<nav class="site-navigation"></nav>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("im").fadeOut();
		});
	</script>

