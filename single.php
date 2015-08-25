
<html>
 	<body> 
		<div class="post">
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	  
      <h2 style="border-bottom:1px solid #EEE;"><?php the_title(); ?></h2>
      <div class="content"> <?php the_content(); ?> </div>
	
   <?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;

?>
			</div>
  </body>
</html>

<style type="text/css">
  
  body {
       font-family: 'Tangerine', serif;;
	     font-size: 120%;
	     background-color: #FFFAFA;
  }
  
  div.post { 
    width: 600px;
    margin-top:80px;
    margin-bottom:80px;
    margin-right: auto;
    margin-left: auto; 
  }
  h2 {
     text-align: center;
  }
  div.content {
    margin-top:30px;
  }
  
</style>