<!DOCTYPE html>
<html>

<head>
<html>
<link rel="stylesheet" href="themes/jqerymobile.icons.min.css">
<link rel="stylesheet" href="themes/silent.css">
<link rel="stylesheet" href="themes/silent.min.css">
</html>
<!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<head>
	<center>
	<title>Home</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<script>
            var username,email,password,sub;
            function submitted(){
                location.replace("interface.html")
            }
        </script>
</head>
<body>

<div data-role="header" class="header">
	<h2>Home Page</h2>
</div>
<div data-role="content" class="content">

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div data-role="error" class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>! 
		<button onclick="submitted()">Here</button> You can have access to the app</p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>