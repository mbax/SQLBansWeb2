<?php
session_start();
include('../assets/core/classes/class.core.php');

/*
 * Add Appeal to Database
 */
 
if(isset($_POST['appeal'])){

	$username = mysql_real_escape_string($_SESSION['sqlbans_user']);
	$bancode = mysql_real_escape_string($_SESSION['sqlbans_bancode']);
	$appeal = mysql_real_escape_string($_POST['appeal']);
	
	mysqli_query($mysqli->link, "INSERT INTO `".$_INFO['mysql']['table']['appeals']."` VALUES('NULL', '".$bancode."', '".$username."', '', '".$appeal."', '0', '0', '2')")or die;
	$sqlbans->redir->r('../index.php');

}else{

	exit(':s');

}

?>