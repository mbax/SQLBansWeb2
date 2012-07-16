<div class="row">
	<div class="span12">
		<div class="alert alert-error">
	       		<h4 class="alert-heading">403 - Access Denied</h4>
	        	<p>This section is only avaliable to registered members. Please login to continue.</p>
		</div>
	</div>
</div>
<div class="row">
    <div class="span6">
      <form class="form-horizontal well" action="pages/check_login.php" method="post">
      	<fieldset>
      		<legend>Appeal Ban</legend>
              	<div class="control-group">
                  	<label class="control-label">Username</label>
                  		<div class="controls">
                    			<input type="text" class="input-xlarge" name="username">
                    				<p class="help-block">Please input your Minecraft username exactly as it is spelled including capitalization and underscores.</p>
                  		</div>
                	</div>
                	<div class="control-group">
                		<label class="control-label">Unique Ban ID</label>
                			<div class="controls">
                	  			<input type="text" class="input-xlarge" name="banid">
                	  				<p class="help-block">Enter the Ban ID found in your ban reason.</p>
                			</div>
                	</div>
                	<input type="hidden" name="f" value="code">
                	<div class="form-actions">
                  	<button type="submit" class="btn btn-primary">Login</button>
                	</div>
      	</fieldset>
      </form>
    </div>
    <div class="span6">
      <form class="form-horizontal well" action="pages/check_login.php" method="post">
      	<fieldset>
      		<legend>Appeal IP Ban</legend>   		
              	<div class="control-group">
                  	<label class="control-label">IP Address</label>
                  		<div class="controls">
                    			<input type="text" class="input-xlarge" disabled="disabled" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
                  		</div>
                	</div>
                	<input type="hidden" name="f" value="ip">
                	<div class="form-actions">
                  		<button type="submit" class="btn btn-primary">Login</button>
                	</div>
      	</fieldset>
      </form>
      <div class="alert alert-info">
      	If you think that you may have been IP banned from this server (cannot connect, banned but unable to see ban reason or code, etc.) then you may use this form to appeal.
      </div>
    </div>
  </div>
