<?php
/*
 * SQL Bans Web - Configuration File
 */

/*
 * MySQL Information
 */ 
$_INFO['mysql']['username'] = 'root';
$_INFO['mysql']['password'] = 'root';
$_INFO['mysql']['host'] 	= 'localhost';
#$_INFO['mysql']['port']		= '3306';
$_INFO['mysql']['database'] = 'sqlbans';

	/*
	 * Table Names
	 */
	$_INFO['mysql']['table']['bans'] 	= 'bans';
	$_INFO['mysql']['table']['ipbans
	'] 	= 'ip_bans';
	$_INFO['mysql']['table']['appeals'] = 'appeals';
	$_INFO['mysql']['table']['users'] 	= 'users';

/*
 * Admin Account Storage Method
 * Set to 'text' for Text based storage, 'mysql' for mysql storage
 */
$_INFO['admin']['account']['method'] = 'text';

/*
 * Admin Account Information
 * Only necessary if Account Method is set to text
 */
$_ACCOUNT['admin']['accounts'] = array('admin' => 'password', 'admin2' => 'password2');
 
/*
 * Website Information
 */
$_INFO['website']['title'] = 'SQLBans Web Interface';

/*
 * Comment out this line when configured.
 */
#define('SQLBANS_CONFIGURED', false);

?>