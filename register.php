<?php include('server.php'); 
if(isset($_POST['register'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password1 = $_POST['password1'];
        $Date_of_Birth = $_POST['dob'];
        $Gender = $_POST['Gender'];
	}
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">
		
		<?php include('errors.php'); ?>
		<div class="input_group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input_group"><br><br>
			<label>Email</label>
			<input type="text" name="email"  value="<?php  $email; ?>">
		</div>
		<div class="input_group"><br><br>
			<label>Password</label>
			<input type="password" >
		</div>
		<div class="input_group"><br><br>
			<label>Date of Birth</label>
			<input type="dob" >
		</div>
		div class="input_group">
			<button type="submit" name="Signup" >Register</button>
		</div>
		<form>
  
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
