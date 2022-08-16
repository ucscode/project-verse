<?php 

$Menu = new Menufy();

$Menu->add('home', [
	'label' => 'Home',
	'link' => core::url()
]);


# [ ADD EXTENSIONS ] 

$PRELOAD = [ EXT_DIR, CONT_DIR ];

foreach( $PRELOAD as $DIR ) {
	
	$SRC = new DirectoryIterator( $DIR ); 
	
	foreach( $SRC as $Iter ) {
		
		if( $Iter->isDot() || $Iter->isFile() ) continue;
		$indexFile = $Iter->getPathname() . '/index.php';
		
		if( is_file($indexFile) ) require_once $indexFile;
		
	};
	
};