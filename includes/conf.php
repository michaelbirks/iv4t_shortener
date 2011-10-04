<?php /* conf.php ( config file ) */

// page title
define('PAGE_TITLE', 'I\'d Vote for That URL Shortener');

// MySQL connection info
$ini_file = parse_ini_file('db_password.ini');

define('MYSQL_USER', 'lilurl');
define('MYSQL_PASS', $ini_file['DB_PASSWORD']);
define('MYSQL_DB', 'lilurl');
define('MYSQL_HOST', 'localhost');

// MySQL tables
define('URL_TABLE', 'lil_urls');

// use mod_rewrite?
define('REWRITE', true);

// allow urls that begin with these strings
$allowed_protocols = array('http:', 'https:', 'mailto:');

// uncomment the line below to skip the protocol check
// $allowed_procotols = array();

/*
 * Modifications for the Retakethe.net policy auction site
 */
define('IV4T_prepend', 'http://www.idvoteforthis.com/');
define('IV4T_postOrigin', "This originates from the RetakeThe.net project I'd Vote for This");

?>
