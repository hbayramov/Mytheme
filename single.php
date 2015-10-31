<!DOCTYPE html>
<html>
  <head>	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <style type="text/css">
  
      body {
            background-color: #FFFAFA;
            font-size:20px;
      }
      p {
           color: #000;
           font-family:Arial, Helvetica;
           font-size:16px;  
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
      div.sidebar2 {
            list-style:none;
      }
     @media screen and (max-width: 500px)  {
            div.post {
              float:none;
              width:100%;
            }
            p {
              color: #000;
              font-family: Arial, Helvetica;
              font-size:100%; 
              margin-left:3%; 
            }
      }
		</style>
    <title><?php bloginfo('name'); ?>  | <?php the_title(); ?> </title>
  </head>
 	<body> 
     <?php include_once("analyticstracking.php") ?>
		<div class="post">
    <article>
<?php

if (have_posts()) :
	while (have_posts()) : the_post(); ?>
      <?php dynamic_sidebar('sidebar3'); ?>
      <h2 style="border-bottom:1px solid #EEE;"><?php the_title(); ?></h2>
      <div class="content"> <?php the_content(); ?> </div>
      <div class="sidebar2" > <?php dynamic_sidebar('sidebar2'); ?> </div>
      <?php comments_template(); ?>
      
   <?php endwhile;
	
	else :
		echo '<p>No content found</p>';
	
	endif;

?>
       </article>
			</div>
  </body>
</html>

