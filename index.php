<?php
include "includes/db.php";
include "includes/functions.php";

?>



<!DOCTYPE  html>
<html>
<head>
	<title>IMS Login Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div class="container">
		<div class="loginHeader">
			<h1>MATO'S WATER</h1>
			<p>Equipment and Supplies Trading</p>
		
		</div>
		<div class="loginBody">
			<form action="" method="post">
				<div class="loginButtonContainer">
				<?php   insert_categories();    ?>

					<h1>Register Here! </h1>

				</div>


				<div class="loginInputsContainer">
					<label for="">Username</label>
					<input placeholder="username"type="text" name="user" required/>
				</div>


				<div class="loginInputsContainer">
					<label for="">Email</label>
					<input placeholder="email"type="text" name="email" required/>
				</div>


				<div class="loginInputsContainer">
					<label for="">Password</label>
					<input placeholder="password"type="password" name="password" required/>
				</div>

				<div class="loginButtonContainer">

                        <input class="btn btn-primary" type="submit" value="Register" name="regacc">
                    
					
					<h4>Or</h4>
					
						<input class="btn btn-primary" type="submit" name="login" value="Login" name="regacc">
					
			
				</div>



			</form>  
		</div>
	</div>
</body>
</html>

