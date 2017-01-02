<?php //Template Name: CustomHome ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?php bloginfo('name'); ?> <?php wp_title('‐'); ?></title>
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <?php wp_head();?>

  </head>

  <body class="bg">
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Project name</a> -->
        </div>
        <div id="navbar" class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <!-- <li><a href="#contact">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
    	<div class="profile">
			<div class="profile-body">
				<div class="profile-image">
					<img src="<?php bloginfo('template_directory');?>/assets/img/usman.jpg">
				</div>
				<div class="profile-name">
					<h1>Usman Irale</h1>
				</div>
				<div class="profile-description">
					<p>Ich bin Usman. I am a developer by day and…well, a developer by night too. Senior Developer and Mentor at switch.ng</p>
				</div>
				<div class="profile-social-accounts">
        <ul>
            <li><a href="https://ng.linkedin.com/in/usman-irale-6a60b231"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://twitter.com/superirale"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://github.com/superirale"><i class="fa fa-github"></i></a></li>
            <li><a href="http://stackoverflow.com/users/6745613/irale-osman"><i class="fa fa-stack-overflow"></i></a></li>
		</ul>
        </div>
			</div>
		</div>
<?php get_footer(); ?>