<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="ailogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Aluminij Industries | Registration</title>
</head>
<body>
     <form action="signup-check.php" method="post">
          <div class="box">
               <div class="container">
                    <div class="top">
                         <header>SIGN UP</header>
                         <?php if (isset($_GET['error'])) { ?>
                              <p class="error"><?php echo $_GET['error']; ?></p>
                              <?php } ?>
                              <?php if (isset($_GET['success'])) { ?>
                                   <p class="success"><?php echo $_GET['success']; ?></p>
                                   <?php } ?>
                    </div>

                    <br>

          <div class="input-field">

          

          <!--<label>Name</label>  -->
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" name="name" placeholder="Name" class="input"
               value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" name="name" placeholder="Name" class="input"><br>
          <?php }?>
          </div>

          <br>

          <div class="input-field">

          <!--<label>Username</label>-->
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"
                      class="input"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"
                      class="input"><br>
          <?php }?>

          </div>

          <br>

          <div class="input-field">


     	<!--<label>Password</label> -->
     	<input type="password" 
                 class="input"
                 name="password" 
                 placeholder="Password"><br>

          </div>

          <br>

          <div class="input-field">

          <!--<label>Confirm Password</label>-->
          <input type="password" 
                 name="re_password"
                 class="input" 
                 placeholder="Re_Password"><br>

          </div>

          <br>

          <div class="input-field">

     	<input type="submit" class="submit" value="Submit">

          </div>

          <br>

          <div class="bottom">

          <a href="index.php" class="back_to_login">Already have an account?</a>
          <a class = "back_to_login" href="index.html">Home Page</a>

          </div>
          
     </form>
</body>
</html>