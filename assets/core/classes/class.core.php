<?php
/*
 * SQLBans Web Interface - Core Classes File
 */
 
require('class.config.php');
require('class.redirect.php');

$mysqli->link = mysqli_connect($_INFO['mysql']['host'], $_INFO['mysql']['username'], $_INFO['mysql']['password'], $_INFO['mysql']['database']);
$sqlbans->redir = new redirect();

if(defined('SQLBANS_CONFIGURED')){
	exit('<h1>409 - Conflict</h1>');
}
?>