<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
<center>
<!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="colors.css?v=">


 <title>Silent Location Bot Login System</title>

</head>
<body>
  <div data-role="header" class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div data-role="main" class="input-group">
	  <label for="username">Username:</label>
  		<input type="text" name="username" id="username" >
  	</div>
  	<div data-role="main" class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" id="password">
  	</div>
  	<div data-role="footer" class="input-group">
  		<button type="submit" class="btn" name="login_user" id="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
           