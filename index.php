<!DOCTYPE html>
<html>
	<head>
		<title>SQLBans Web Interface</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8">
			<link rel="stylesheet" href="assets/css/bootstrap.responsive.css" type="text/css" media="screen" charset="utf-8">
			<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	</head>
<body class="preview" data-spy="scroll" data-target=".subnav" data-offset="50">
    <section id="navbar">
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container" style="width:1170px;margin: 0px auto;">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">SQLBans Web</a>
          </div>
        </div><!-- /navbar-inner -->
      </div><!-- /navbar -->
    </section>
    <div class="container">
		<div class="row">
			<div class="span12">
				<div class="alert alert-error">
			       		<h4 class="alert-heading">403 - Access Denied</h4>
			        	<p>This section is only avaliable to registered members. Please login to continue.</p>
				</div>
			</div>
		</div>
		
		<form class="form-horizontal well">
			<fieldset>
				<legend>Login to Appeal Ban</legend>
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
		          	<div class="form-actions">
		            	<button type="submit" class="btn btn-primary">Login</button>
		          	</div>
			</fieldset>
		</form>
		
      <footer class="footer">
        <p class="pull-right">Copyright &copy; 2012 - SQLBans Team</p>
      </footer>

    </div><!-- /container -->
  </body>
</html>