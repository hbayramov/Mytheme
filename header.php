<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	 <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?>  | Ana Səhifə </title>
    <?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
      <?php include_once("analyticstracking.php") ?>
      <a href="https://github.com/hbayramov" target="_blank"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"></a> 
    <div class = "container">
    <!-- site-header -->
	 <header class="site-header">
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
   </header> <!-- /site-header -->  
   <div class="descrp">
             	<p><?php bloginfo('description');  ?> </p>
              <p><a href="https://www.goodreads.com/user/show/7796735-bayramov-huseyn">Goodreads</a>'də dost ola bilərik. </p>
      		    <p><a href="https://tr.linkedin.com/pub/huseyn-bayramov/81/914/883">LinkedIn</a>
               profilim</p>
   </div>
  
   <div class="image">
              <p  style="margin-left:48px;"> 
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/man.png" width="32" height="32" alt ="man">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/home.png" width="32" height="32" alt ="home">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/happy2.png" style="margin-left:10px;"  width="32" height="32" alt="happy">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/food.png" style="margin-left:10px;" width="32" height="32" alt = "food">
               <p style="margin-top:10px">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/gamepad.png" style="margin-left:2px;"  width="32" height="32" alt = "gamepad">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/github.png" style="margin-left:2px;"  width="32" height="32" alt = "github">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/embed2.png" width="32" height="32"alt="embed2">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/apple.png" style="margin-left:4px;" width="32" height="32" alt="apple">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/connection.png" style="margin-left:5px;" width="32" height="32" alt="connection">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/keyboard.png" style="margin-left:4px;" width="32" height="32" alt="keyboard">  </p>
               <p style="margin-left:48px; margin-top:-2px;">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/firefox.png" width="32" height="32" alt="firefox">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/html5.png" style="margin-left:5px;" width="32" height="32" alt="html5">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/tux.png" style="margin-left:5px;" width="32" height="32" alt="tux">
                 <img src = "http://localhost/wordpress/wp-content/uploads/2015/11/refresh.png" style="margin-left:5px;" width="32" height="32" alt="refresh"> </p>
    </div>
      
    </div> <!-- container -->
   
  </body>

</html>


