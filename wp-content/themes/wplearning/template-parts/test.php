<?php

/* Template Name: Test Page*/

?>

<div class="nutrition">
	<h1>sdifdslf</h1>
	
	<?php

	$image=get_field('images');

	if ($image)
	 {

	 ?>


		 <?php
			foreach ($image as $myimage)
			 {
				$ntimage = $myimage['image']['url'];
			
		?>	

				<img src="<?php echo $ntimage ?>" class="img-fluid mx-auto" >

		
		<?php	} ?>


<?php } ?>

	
</div>