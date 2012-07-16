<?php
session_start();
include('../assets/core/classes/class.core.php');

/*
 * Add Appeal to Database
 */
 
if(isset($_POST['reply'])){

	$username = mysql_real_escape_string($_SESSION['sqlbans_user']);
	$bancode = mysql_real_escape_string($_SESSION['sqlbans_bancode']);
	$reply = mysql_real_escape_string($_POST['reply']);
	
	mysqli_query($mysqli->link, "INSERT INTO `".$_INFO['mysql']['table']['appeals']."` VALUES('NULL', '".$bancode."', '".$username."', NOW(), '".$reply."', '1', '0', 'NULL')")or die;
	$sqlbans->redir->r('../index.php');

}else{

	exit(':s');

}

?>