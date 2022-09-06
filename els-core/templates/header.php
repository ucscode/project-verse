<?php defined("ROOT_DIR") or die; ?>
<!doctype html>
<html>

<head>
	<?php events::exec("@header:start"); ?>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='icon' href='<?php echo core::url( self::LOGO ); ?>'>
	<link rel='stylesheet' href='<?php echo core::url( TEMP_DIR . '/assets/vendor/bootstrap-5.2.0/css/bootstrap.min.css' ); ?>'>
	<link rel='stylesheet' href='<?php echo core::url( TEMP_DIR . '/assets/vendor/font-awesome-5.8.2/css/all.css' ); ?>'>
	<link rel='stylesheet' href='<?php echo core::url( TEMP_DIR . '/assets/css/main.css' ); ?>'>
	<?php events::exec("@header:end"); ?>
</head>

<body class='<?php echo $page->bodyClass ?? null; ?>'>
	
	<?php events::exec("@body:start"); ?>
	
	<?php if( !$page->blank ): ?>
	
		<!------ [ HEADER ] -------->
		<?php require 'header-nav.php'; ?>
		
		<?php events::exec("@main:before"); ?>
		
		<!------ [ MAIN ] -------->
		<main class='container-fluid py-2'>
		
			<?php events::exec("@main:start"); ?>
			
			<div class='row my-2'>
			
				<div class='mb-5 --content <?php echo $page->content_class; ?>'>
					<?php 
						events::exec("/content:before");
						($page->content)(); 
						events::exec("/content:after");
					?>
				</div>
	
	<?php else: ?>
	
		<?php 
			events::exec("-blank/content:before");
			($page->content)(); 
			events::exec("-blank/content:after");
		?>
			
	<?php endif; ?>