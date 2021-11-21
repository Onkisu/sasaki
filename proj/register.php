<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form action="regact.php" method="POST">
				<img src="avatar.svg">
				<h2 class="title">　こんにちは！</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" id="user" name="user">
           		   </div>
           		</div>
                

                   <div class="input-div email">
           		   <div class="i"> 
           		    	<i class="fas fa-envelope"></i>
           		   </div>

           		   <div class="div">
           		    	<h5>Email</h5>
           		    	<input type="email" class="input" id="email" name="email">
            	   </div>
            	  </div>


           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>

           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" id="pass" name="pass">
            	   </div>
            	</div>

                <div class="input-div conpass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>

           		   <div class="div">
           		    	<h5>Confirm Password</h5>
           		    	<input type="password" class="input" id="conpass" name="conpass">
            	   </div>
            	</div>

                 <a href="loginf.php" class="sign">Sign In</a>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="login.js"></script>
</body>
</html>