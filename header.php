<!doctype html>  
<?php global $redux_demo?>
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		  <script type="text/javascript">
			$(window).scroll(function () {
    if ($(window).scrollTop() >= 50) {
    $('body').css('background','red');
    } else {
    $('body').css('background','transparent');
    }
    });
			</script>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	
	</head>
	
	<style>
.navbar .brand, .navbar .nav > li > a {
	color: #777272;
}
.navbar .brand, .navbar .nav > li > a:hover {
	color: #FFFF;
	background-color:#FFFF;
}
</style>
	<body <?php body_class(); ?>>
				
		<header role="banner">	

		
		
			<div class="navbar navbar-default navbar">
			<nav class ="fill">
			
			<div class="container">
				<div class="box effect2">  		

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand">	<img src="<?php echo $redux_demo['opt-medias']['url']; ?>"></a>
					
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>

						<?php //if(of_get_option('search_bar', '1')) {?>
						<form class="navbar-form navbar-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<div class="form-group">
								<input name="s" id="s" type="text" class="search-query form-control" autocomplete="off" placeholder="<?php _e('Search','wpbootstrap'); ?>">
							</div>
						</form>
						<?php //} ?>
					</div>
				</div>
				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
			
			</nav>
			
		
			<?php echo $redux_demo['opt-multitext']['multi_text']; ?>

		</header> <!-- end header -->
		
		<div class="d">
		
		
