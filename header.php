<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
    <!-- site-header -->
		<header class="site-header">
        <h1><a href="<?php echo home_url(); ?>" style="text-decoration:none;"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description');  ?> <p>
        <p> Bu mənim şəxsi blog səhifəmdir. </p>
        <p> Kompüter Mühəndisi (Hələ ki məzun ola bilməmişəm.)	</p>
        <p> Programlama, Programlama Yarışları (Competitive Programming).</p>
        <p> Web (Javascript'i səndə sevməlisən.)  </p>
        <div class="extra_info"> 
       		<p><a href="https://www.goodreads.com/user/show/7796735-bayramov-huseyn">Goodreads</a>'də dost ola bilərik. </p>
        	<p>Maraqlı gələn proekt olsa <a href="https://github.com/hbayramov">Fork</a>'la.  </p>
        	<p> Mənə <a href="mailto:hsyn.bayramov@gmail.com" style="text-decoration:none;"> e-mail </a>  göndər. </p>
      </div>
      </header><!-- /site-header -->  
  </body>

</html>
