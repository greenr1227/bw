<!doctype html>
<!--[if lt IE 9]>    <html class="oldie"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
	<head>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">

		<title><?=wp_title( ' | ', true, 'right' ); ?> <?=bloginfo('title');?></title>

		<!-- fonts -->
		<script type="text/javascript" src="http://use.typekit.com/egw2mrz.js"></script>
		<script>
			var get_theme_root_uri = function() {return "<?=get_theme_root_uri();?>"; };
			var webb = webb || {};

			// older font kit, adrianna
			try{Typekit.load();}catch(e){}

			// newer font kit, engravers, didot, new baskerville
			// first, create the object that contains
		    // configuration variables
		    MTIConfig = {};

		    // next, add a variable that will control
		    // whether or not FOUT will be prevented
		    MTIConfig.EnableCustomFOUTHandler = true // true = prevent FOUT
		</script>
		<script type="text/javascript" src="http://fast.fonts.net/jsapi/09a0b9c2-83b1-4835-ae6e-626a0d2589ad.js"></script>
		
		<!--rewardstyle analytics script-->
		<script>window.nastygoat = {aid:"Vt3z9QaigTAmDoZbhAVvZCXpUIjq9NNsq4YgrXgkacYB",pid:"pU-0FRWOslm1fJyqLbEzFoBfM0O42TmXClSFTNHKsLWf"};</script>
		<script type="text/javascript" src="//assets.rewardstyle.com/scriptmanager/rs-script-manager.js"></script>


		<? wp_head(); ?>
		<!--rewardstyle analytics script-->
		<script>window.nastygoat = {aid:"Vt3z9QaigTAmDoZbhAVvZCXpUIjq9NNsq4YgrXgkacYB",pid:"pU-0FRWOslm1fJyqLbEzFoBfM0O42TmXClSFTNHKsLWf"};</script>
		<script type="text/javascript" src="//assets.rewardstyle.com/scriptmanager/rs-script-manager.js"></script>


	</head>

	<body <?=body_class();?>>
	 
		<div class="page-wrap">
			<header class="header">
				
				<div id="hamburger">
				  <span></span>
				  <span></span>
				  <span></span>
				</div>
				
				<a href="/" class="logo">
					<img src="<?=get_theme_root_uri();?>/webb/dist/images/BethWebb-Logo.svg" id="logo">
				</a>
			

				<? wp_nav_menu(array(
					'theme_location'  	=> 'Navigation', 
					'menu_id' 			=> 'nav',
					'container' 		=> false,
					'items_wrap' 		=> '<ul id="%1$s" class="%2$s">%3$s<div class="end-menu"></div></ul>'
				)); ?>
				<div class="cf"></div>
			</div>


			<div id="content">
				
				
				
				
				
				
				
				
				
				
				
			
		
		
		