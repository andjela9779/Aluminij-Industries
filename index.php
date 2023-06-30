<!DOCTYPE html>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ailogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Aluminij Industries | Login</title>
</head>
<body>
     <form action="login.php" method="POST">
	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<div class="box">
			<div class="container">
				<div class="top">
					<span>Have an account?</span>
					<header>Login</header>
				</div>
				<div class="input-field">
					<input type="text" class="input" placeholder="Username" id="" name="uname">
					<i class='bx bx-user' ></i>
				</div>
				<div class="input-field">
					<input type="password" class="input" placeholder="Password" id="" name="password">
					<i class='bx bx-lock-alt'></i>
				</div>
				<div class="input-field">
					<input type="submit" class="submit" value="Login" id="">
				</div>
				<div class="two-col">
					<div class="one">
						<input type="checkbox" name="" id="check">
						<label for="check">Remember Me</label>
					</div>
					<div class="two">
						<label><a href="#">Forgot password?</a></label>
					    <a class ="novi_racun" href ="signup.php">Create an account</a> 
						<a class = "link_na_pocetnu" href="index.html">Home Page</a>
					</div>
				</div>

				<!--<div class="bottom">
					<br>
					<br>
					<span>Create an account</span>
				</div>  -->
			</div>
		</div> 
	</form>
</body>
</html>