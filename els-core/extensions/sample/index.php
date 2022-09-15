<?php 

events::addListener('@nav:right', function() { ?>
	<button type="button" class="btn btn-outline-light me-2">Login</button>
	<button type="button" class="btn btn-warning">Sign-up</button>
<?php });


events::addListener('@footer', function() { ?>
	<ul class="nav justify-content-center">
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
		<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
	</ul>
<?php });


events::addListener("@sidebar", function() {
	echo 'sidebar';
});


$homepage = new stdclass();

$homepage->content = function() { ?>
	<div class='alert alert-info text-center'>
		Your content goes here <br>
		The output of this file was written in <br> 
		<?php echo __FILE__; ?>
	</div>
<?php };



/*  
 *	
	Uncomment any line below to see a different output 
*/


# $homepage->nav_search = false; // to remove search bar
# $homepage->sidebar = false; // to remove sidebar
# $homepage->blank = true; // to make completely blank page


/* 
 *
	If you uncommented any of the above line, uncomment the one below too 
*/

# Temp::register(null, $homepage);

