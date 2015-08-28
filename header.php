<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?>  | Ana Səhifə </title>
    <?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
    <!-- site-header -->
		<header class="site-header">
        <h1><a href="<?php echo home_url(); ?>" style="text-decoration:none;"><?php bloginfo('name'); ?></a></h1>
          <p><?php bloginfo('description');  ?> </p>
       		 <p><a href="https://www.goodreads.com/user/show/7796735-bayramov-huseyn">Goodreads</a>'də dost ola bilərik. </p>
      		 <p><a href="https://tr.linkedin.com/pub/huseyn-bayramov/81/914/883"> LinkedIn</a></p>
  </header><!-- /site-header -->  
  
  </body>

</html>
