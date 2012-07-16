<?php
	session_start();
	include('assets/core/classes/class.core.php');
?>
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
            <?php 
            	if(isset($_SESSION['sqlbans_user']) && isset($_SESSION['sqlbans_bancode']) && $_SESSION['sqlbans_user_ip'] == $_SERVER['REMOTE_ADDR']){
            ?>
            	<ul class="nav pull-right">
	            	<li><a href="pages/check_login.php?logout=true">Logout</a></li>
            	</ul>
           <?php } ?>
          </div>
        </div><!-- /navbar-inner -->
      </div><!-- /navbar -->
    </section>
    <div class="container">
		<?php
		
			/*
			 * Show Login Page
			 */
			if(!isset($_SESSION['sqlbans_user']) || !isset($_SESSION['sqlbans_user_ip']) || !isset($_SESSION['sqlbans_bancode'])){
				include_once('pages/login.php');
			}else if($_SESSION['sqlbans_user_ip'] != $_SERVER['REMOTE_ADDR']){
				include_once('pages/login.php');
			}else if(isset($_SESSION['sqlbans_user']) && isset($_SESSION['sqlbans_bancode']) && $_SESSION['sqlbans_user_ip'] == $_SERVER['REMOTE_ADDR']){
				include_once('pages/appeal.php');
			}
		
		?>
		
      <footer class="footer">
        <p class="pull-right">Copyright &copy; 2012 - SQLBans Team</p>
      </footer>

    </div><!-- /container -->
  </body>
</html>