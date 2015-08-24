
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	 <div class="single">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	  </div>
	
	<?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;

?>