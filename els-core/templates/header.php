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
		<main class='container-fluid py-4'>
			<div class='row'>
			
				<div class='mb-5 <?php echo $page->sidebar ? 'col-lg-8' : 'col-lg-12'; ?>'>
					<?php ($page->content)(); ?>
				</div>
	
	<?php else: ?>
	
		<?php ($page->content)(); ?>
			
	<?php endif; ?>