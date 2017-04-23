<?php
//defines the core paths to allow for the require_once to work
//DIRECTORY_SEPERATOR a pre-defined constant  (\ for windows , / for unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//SITE_ROOT::defines the file system path to the project
//must be changed if on a different machine
defined('SITE_ROOT')?null:
define('SITE_ROOT', DS.'var'.DS.'www'.DS.'html'.DS.'funeral_home');

//LIB_PATH::defines the path to the includes folder which contains all
//the libraries
defined('LIB_PATH')?null:define('LIB_PATH', SITE_ROOT.DS.'includes');


//MENU_COMPONENT::defines the path to the folder that contains the menus
defined('MENU_COMPONENT')?null:
define('MENU_COMPONENT', SITE_ROOT.DS."public".DS."admin".DS."components".DS."menu");

//ADMIN_PAGES::defines the path to the folder that contains the pages
//of the Administrator
defined('ADMIN_PAGES')?null:
define('ADMIN_PAGES', SITE_ROOT.DS."public".DS."admin".DS."components".DS."pages".DS."admin");


//ATTENDANT_PAGES::defines the path to the folder that contains the pages
//of the Attendant
defined('ATTENDANT_PAGES')?null:
define('ATTENDANT_PAGES', SITE_ROOT.DS."public".DS."admin".DS."components".DS."pages".DS."attendant");

//ATTENDANT_PAGES::defines the path to the folder that contains the pages
//of the Attendant
defined('ACCOUNTANT_PAGES')?null:
define('ACCOUNTANT_PAGES', SITE_ROOT.DS."public".DS."admin".DS."components".DS."pages".DS."accountant");

//ACTION_PAGES::defines the path to the folder that contains the pages
//of the Administrator
defined('ACTION_PAGES')?null:
define('ACTION_PAGES', LIB_PATH.DS."admin".DS."action");

defined('WEBSITE_PAGES')?null:
define('WEBSITE_PAGES', SITE_ROOT.DS."public".DS."site1".DS."pages");


//load the config file first
require_once(LIB_PATH.DS."config.php");

//load basic functions next so that the rest of the loaded files can
//uses these two (config.php and functions.php)
require_once(LIB_PATH.DS.'functions.php');
require_once(LIB_PATH.DS.'admin'.DS.'init_vars.php');
// require_once(LIB_PATH.DS.'admin'.DS.'user_loader.php');

//load core objects
require_once(LIB_PATH.DS.'session.php');
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'log.php');

//load database-related classes
require_once(LIB_PATH.DS.'models'.DS.'worker.php');
require_once(LIB_PATH.DS.'models'.DS.'compartment.php');
require_once(LIB_PATH.DS.'models'.DS.'deadbody.php');
require_once(LIB_PATH.DS.'models'.DS.'payment.php');
require_once(LIB_PATH.DS.'models'.DS.'relative.php');
require_once(LIB_PATH.DS.'models'.DS.'requested_service.php');
require_once(LIB_PATH.DS.'models'.DS.'service.php');
require_once(LIB_PATH.DS.'models'.DS.'storage.php');


?>
