<?php get_header(); ?>

<article class="post">
<h1 style ="border-bottom:7px solid #B10DC9;"> Yazılar </h1>
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	   <div class="entry">
		<?php echo get_the_date();  ?>
		</div>
	
	<?php endwhile;

	else :
		echo '<p>No content found</p>';
	
	endif;

?>
</article>
