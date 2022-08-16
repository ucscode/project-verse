<?php 

# -- [ ELS-CORE DIRECTORY ] --

define('CORE_DIR', ROOT_DIR . '/els-core');
define('CLASS_DIR', CORE_DIR . '/classes');
define('TEMP_DIR', CORE_DIR . '/templates');
define('EXT_DIR', CORE_DIR . '/extensions');


# -- [ ELS-CONTENT DIRECTORY ] --

define('CONT_DIR', ROOT_DIR . '/els-content');


# -- [ GET ALL CLASSES ] --

require CLASS_DIR . '/abs-core.php';
require CLASS_DIR . '/core.php';
require CLASS_DIR . '/events.php';
require CLASS_DIR . '/datamemo.php';
require CLASS_DIR . '/menufy.php';


# -- [ GET TEMPLATE DATA ] --

require CORE_DIR . '/els-temp.php';


