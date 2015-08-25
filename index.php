
<div class="container">
   <?php get_header(); ?>
  
  <div class="post">
    <p style ="display: inline-block; padding-right:300px;	border-bottom:1px solid #EEE; font-weight:bold; font-size:170%;"> Yazılar </p>
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
  </div>  
  <div class="sidebar">
       <p>	<?php dynamic_sidebar('sidebar1'); ?> </p>
</div>
  
</div>
