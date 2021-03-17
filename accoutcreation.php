<?php

// connect to the db
//include_once "path";

//to test database connection later
//if(!$db){
	//
//}

//check for submit

   if (isset($_REQUEST['username'])) {
    include ("init.php");
        // $id = $_REQUEST['id'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $cpassword = $_REQUEST['cpassword'];
    if (($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $ins="INSERT INTO userregistration SET   fname='$fname', lname='$lname', username='$username', password='$hash'";
         $result = mysqli_query($conn, $ins); 
        if($result){
            echo "<div class='form'>
                  <h3>You are registered successfully!</h3><br/>
                  <p class='link'>Click here to <a href='login.html'>Login</a></p>
                  </div>";
        } 
        else {
            echo "Username already registered try different one";
        }
    }
    else{
        echo "password do not match";
    }
        
   }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Account Creation</title>
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <script src="script.js"></script>
  </head>
  <body>
    <div style="min-width: 1461px; margin: 0 auto;">
    <div class="hero-bg">
      <div class="tamucbtn">
          <div class="tamuclogo">
              <img class="pull-left" src="logolion.png" alt="tamuclogo" width="125" height="125"><h1>Welcome to the TAMUC Online Colorblindness Test!</h1>
              <a class="signup" href="accoutcreation.html"><button type="button" class="btn btn-warning">Sign Up</button></a>
              <a href="login.html"><button type="button" class="btn btn-warning">Sign In</button></a>
          </div>
      </div>
      <div class="shopping">
              <a href="#"><img src="shopping-cart-48.png" alt="shoppingcart" width="65" height="65"></a>
      </div>
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" href="Index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">How It Works</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link Active" href="accountsettings.html">Account Settings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Support</a>
        </li>
      </ul>
      </div>
      <form class="form-horizontal" action='' method="POST">
        <fieldset>
          <div id="legend">
            <legend class="fieldsetname">Create Your Account</legend>
          </div>
          <div class="control-group">
            <label class="control-label"  for="firstname">First Name</label>
            <div class="controls">
              <input type="text" id="Firstname" name="firstname" placeholder="" class="input-xlarge">
              <?php if(isset($errors['f'])) echo $errors['f']; ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="lastname">Last Name</label>
            <div class="controls">
              <input type="text" id="Lastname" name="lastname" placeholder="" class="input-xlarge">
              <?php if(isset($errors['l'])) echo $errors['l']; ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Email Address</label>
            <div class="controls">
              <input type="email" id="Email" name="email" placeholder="example@email.com" class="input-xlarge">
              <?php if(isset($errors['e'])) echo $errors['e']; ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
              <input type="text" id="username" name="username" placeholder="Username is case sensitive" class="input-xlarge">
              <?php if(isset($errors['u'])) echo $errors['u']; ?>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="password">Password</label>
            <div class="controls">
              <input name="password" id="password" type="password" onkeyup='check();' />
              <?php if(isset($errors['p'])) echo $errors['p']; ?>
              <p class="help-block">Password must have atleast:</p>
              <p class="help-block">6 Characters</p>
              <p class="help-block">One uppercase Letter</p>
              <p class="help-block">One Lowercase Letter</p>
              <p class="help-block">One Number or Symbol (1,2,?,!)</p> 
             </div>
          </div>
          <div class="control-group">
            <label class="control-label"  for="password_confirm">Re-enter password</label>
            <div class="controls">
              <input type="password" name="confirm_password" id="confirm_password"  onkeyup='check();'/>
              <br></br>
              <span id='message'></span>
         </div>        
          <div class="control-group">
            <div class="controls">
              <button class="btn btn-warning">Create Account</button>
            </div>
          </div>
        </fieldset>
    </form>
    <footer class="footer">
      <div class="container">
        <span class="text-muted">© 2021 ALL RIGHTS RESERVED. TEXAS A&M UNIVERSITY-COMMERCE.</span>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </div>
  </body>
</html>


