<?php
session_start();
include('../assets/core/classes/class.core.php');
/*
 * SQL Bans Login Check
 */

if(isset($_GET['logout'])){

	$_SESSION['sqlbans_user'] = '';
	$_SESSION['sqlbans_bancode'] = '';
	$_SESSION['sqlbans_user_ip'] = '';
	
	session_unset();
	session_destroy();
	$sqlbans->redir->r('../index.php');

}

if(!isset($_POST['f'])){ exit(':s'); }
	
	/*
	 * Login Method
	 */
	if($_POST['f'] == 'code'){
	
		/*
		 * Check for user IP in Database
		 */
		$query = mysqli_query($mysqli->link, "SELECT * FROM `".$_INFO['mysql']['table']['bans']."` WHERE `ban_code` = '".mysql_real_escape_string($_POST['banid'])."' AND `username` = '".mysql_real_escape_string($_POST['username'])."' AND `banned` = 1");
		
			if(mysqli_num_rows($query) ==  1){
			
				$_SESSION['sqlbans_user'] = mysql_real_escape_string($_POST['username']);
				$_SESSION['sqlbans_bancode'] = mysql_real_escape_string($_POST['banid']);
				$_SESSION['sqlbans_user_ip'] = $_SERVER['REMOTE_ADDR'];
				$sqlbans->redir->r('../index.php');
			
			}else{
			
				$sqlbans->redir->r('../index.php');
			
			}
	
	}else{
	
		/*
		 * Check for supplied ban code.
		 */
	
	}



?>