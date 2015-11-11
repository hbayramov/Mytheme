
 <?php get_header(); ?> 

<div class="site-content">    
   <div class="main-column">
    <p style ="display: inline-block; padding-right:300px;	border-bottom:3px solid #EEE; font-weight:bold; font-size:170%;"> Yazılar </p>
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
  </div> <!-- /main-column -->
  
  
 <div class="twitter">
          <a class="twitter-timeline"  href="https://twitter.com/huseyn_xan" data-widget-id="659029136413990912">Tweets by @huseyn_xan</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs"); </script>
 </div>

</div> <!-- site-content -->


