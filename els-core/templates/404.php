<?php defined("ROOT_DIR") or die; ?>

<div class="px-4 py-4 my-4 text-center">

	<?php if( empty(core::slug()) ): ?>
	
		<img class="d-block mx-auto mb-4" src="<?php echo core::url( Temp::LOGO ); ?>" alt="" width="72">
	
		<h1 class="display-6 fw-bold mb-3">Welcome To</h1>
		<div class="col-lg-6 mx-auto">
			<h3 class='mb-3 fw-bold display-2'><?php echo $GLOBALS['Config']->sitename; ?></h3>
			<p class="lead mb-4">
				A Simple & Powerful Project Development System.
			</p>
		</div>
	
	<?php else: ?>
	
		<h1 class="display-1 fw-bold mb-3">404</h1>
		<div class="col-lg-6 mx-auto">
			<h4 class='mb-3 display-6'>Page Not Found</h4>
			<p class="lead mb-4">
				The page you are looking for was not found.
			</p>
			<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
				<a href='<?php echo core::url(); ?>' class="btn btn-primary btn-lg px-4 gap-3">
					Homepage
				</a>
			</div>
		</div>
	
	<?php endif; ?>
	
</div>