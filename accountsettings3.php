<?php

// connect to the db
//include_once "database.php";

//to test database connection 
//if(!$db){
	//
//}

//check for submit
if(isset($_POST['update']))
{
	
	// get the data from the form and assign the data to variables
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$Email = $_POST['Email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
  $errors = array();
	if(empty($Firstname)
	{
		$errors['f'] = "First name is missing";
	}


	if(empty($Lastname)
	{
		$errors['l'] = "Last name is missing";
	}

	if(empty($Email)
	{
		$errors['e'] = "Email is missing";
	}

	if(empty($username)
	{
		$errors['u'] = "Username is missing";
	}

	if(empty($password)
	{
		$errors['p'] = "Password is missing";
	}

	// add slashes and prepare the data for inserting into the db
	$Firstname = addslashes($Firstname );
	$Lastname = addslashes($Lastname );
	$Email = addslashes($Email);
	$username = addslashes($username);
	$password = addslashes($password);

	//checking for errors
	if(count($errors)==0)
	{
		// prepare the query
		$query = "INSERT INTO database (Firstname, Lastname, Email, username, password) VALUES
			('".$Firstname."','".$Lastname."','".$Email."','".$username."','".$password."')";

		// run the query
		$result = mysqli_query($db,$query);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Account Settings</title>
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <script src="script.js"></script>
  </head>
  <body>
      <div style="min-width: 1461px; margin: 0 auto;">
      <div class="hero-bg">
      <div class="tamucbtn">
          <div class="tamuclogo">
              <img class="pull-left" src="logolion.png" alt="tamuclogo" width="175" height="125"><h1>Welcome to the TAMUC Online Colorblindness Test!</h1>
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
          <a class="nav-link Active" href="accountsettings3.html">Account Settings</a>
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
            <legend class="fieldsetname">Your Account</legend>
          </div>
                <div class="AS">
                    <img src="john.jpg" alt="john">
                    <h6>First Name</h6>
                    <input type="text"
                    class="input" value="Jane">
                    <h6>Last Name</h6>
                    <input type="text"
                    class="input" value="Doe">
                    <h6>Email</h6>
                    <input type="text"
                    class="input" value="example@email.com">
                    <h6>Username</h6>
                    <input type="text"
                    class="input" value="JaneDoe123">
                    <h6>Password</h6>
                    <input type="password"
                    class="input" value="password">
                    <br></br>
                    <button 
                    class="btn btn-warning">Update</button>                    
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
