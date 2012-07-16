<?php
$selectAppeal = mysqli_query($mysqli->link, "SELECT * FROM `".$_INFO['mysql']['table']['appeals']."` WHERE `ban_code` = '".mysql_real_escape_string($_SESSION['sqlbans_bancode'])."'");
if(mysqli_num_rows($selectAppeal) == 0){

	/*
	 * No Appeal Exists
	 */

	/*
	 * MySQL Stuff
	 */
	$query = mysqli_query($mysqli->link, "SELECT * FROM `".$_INFO['mysql']['table']['bans']."` WHERE `ban_code` = '".mysql_real_escape_string($_SESSION['sqlbans_bancode'])."' AND `username` = '".mysql_real_escape_string($_SESSION['sqlbans_user'])."' AND `banned` = 1");

	$row = mysqli_fetch_assoc($query);

?>
<div class="row">
	<div class="span12">
		<div class="alert alert-error">
	       		<h4 class="alert-heading">Notice</h4>
	        	<p>You have one chance to appeal this ban. If your appeal is denied you will be unable to re-appeal.</p>
		</div>
	</div>
</div>
<form class="form-horizontal well" action="pages/post_appeal.php" method="post">
	<fieldset>
		<legend>Ban (#<?php echo $row['ban_code']; ?>) Information</legend>
        	<div class="control-group">
            	<label class="control-label">Username</label>
            		<div class="controls">
              			<input type="text" class="input-xxlarge" disabled="disabled" value="<?php echo $row['username']; ?>">
            		</div>
          	</div>
          	<div class="control-group">
          		<label class="control-label">Admin</label>
          			<div class="controls">
          	  			<input type="text" class="input-xxlarge" disabled="disabled" value="<?php echo $row['admin']; ?>">
          			</div>
          	</div>
          	<div class="control-group">
          		<label class="control-label">Ban Date</label>
          			<div class="controls">
          	  			<input type="text" class="input-xxlarge" disabled="disabled" value="<?php echo $row['timestamp']; ?>">
          			</div>
          	</div>
          	<div class="control-group">
          		<label class="control-label">Ban Reason</label>
          			<div class="controls">
          	  			<textarea class="input-xxlarge" id="textarea" rows="3" disabled="disabled"><?php echo $row['reason']; ?></textarea>
          			</div>
          	</div>
          	<div class="control-group">
          		<label class="control-label">Your Appeal</label>
          			<div class="controls">
          	  			<textarea class="input-xxlarge" id="textarea" rows="5" name="appeal"></textarea>
          			</div>
          	</div>
          	<div class="form-actions">
            	<input type="submit" class="btn btn-success" value="Submit Appeal"></input>
          	</div>
	</fieldset>
</form>
<?php

}else{

	/*
	 * Appeal Exists Already
	 */
	$selectBanInfo = mysqli_query($mysqli->link, "SELECT * FROM `".$_INFO['mysql']['table']['bans']."` WHERE `ban_code` = '".mysql_real_escape_string($_SESSION['sqlbans_bancode'])."' AND `username` = '".mysql_real_escape_string($_SESSION['sqlbans_user'])."' AND `banned` = 1");
	$banInfo = mysqli_fetch_assoc($selectBanInfo);
	 
	 
	$selectMainAppeal = mysqli_query($mysqli->link, "SELECT * FROM `".$_INFO['mysql']['table']['appeals']."` WHERE `ban_code` = '".mysql_real_escape_string($_SESSION['sqlbans_bancode'])."' AND `is_followup` = 0 LIMIT 1"); 
	$mainAppeal = mysqli_fetch_assoc($selectMainAppeal);
	
	if($mainAppeal['appeal_status'] == '2'){ $appealStatus = '<span class="label">In-Progress</span>'; }
	else if($mainAppeal['appeal_status'] == '1'){ $appealStatus = '<span class="label label-important">Denied</span>'; }
	else if($mainAppeal['appeal_status'] == '0'){ $appealStatus = '<span class="label label-success">Approved</span>'; }
	
?>
<div class="row">
	<div class="well">
		<h1>Ban Appeal (#<?php echo $mainAppeal['ban_code']; ?>)</h1>
		<h5>Ban Date: <?php echo $banInfo['timestamp']; ?> <br /> Ban Reason: <?php echo $banInfo['reason']; ?> <br /> Status: <?php echo $appealStatus; ?></h5>
		<br /><p><?php echo $mainAppeal['text']; ?></p>
	</div>
</div>
<?php

	/*
	 * Replies to Appeal
	 */
	$selectReplies = mysqli_query($mysqli->link, "SELECT * FROM `".$_INFO['mysql']['table']['appeals']."` WHERE `ban_code` = '".mysql_real_escape_string($_SESSION['sqlbans_bancode'])."' AND `is_followup` = 1"); 
	
		$r = '';
		while($reply = mysqli_fetch_assoc($selectReplies)){
		
			if($reply['is_staff'] == 1){ $isStaff = 'alert alert-info'; }else{ $isStaff = ''; }
		
			$r .= '
			<div class="row">
				<div class="well '.$isStaff.'">
					<h3>Reply by '.$reply['username'].'</h3>
					<br /><p>'.$reply['text'].'</p>
				</div>
			</div>
			';
		
		}

	echo $r

?>
<div class="row">
<form class="form-horizontal well" action="pages/post_appeal_reply.php" method="post">
	<fieldset>
		<legend>Adding Reply to Ban #<?php echo $mainAppeal['ban_code']; ?></legend>
          	<div class="control-group">
          		<label class="control-label">Reply</label>
          			<div class="controls">
          	  			<textarea class="input-xxlarge" id="textarea" rows="5" name="reply"></textarea>
          			</div>
          	</div>
          	<div class="form-actions">
            	<input type="submit" class="btn btn-success" value="Add Reply"></input>
          	</div>
	</fieldset>
</form>
</div>
<?php
}
?>