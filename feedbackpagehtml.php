 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Feedback</title>
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
      <form class="form-horizontal" action='' method="POST" id="feedback">
            <fieldset>

            <div id="legend">
                <legend  align="center" class="fieldsetname"><b> We value your Feedback!</b></legend>
            </div>

            <div class="feedback">
                    <p> Please help us improve our service <br>by completing the question below.</br></p>
					<p> What is your opinion of the Online <br>Color Blindness Test Website? </br></p>
				    <p style="font-size:48px"> <button>&#128522;</button> <button>&#128528</button> <button>&#128530;</button> </p>
					<hr size="10">
                <h4>Please leave your feedback below:</h4>
                    <textarea name="help" id="help" form="feedback" columns="4" rows="4" ></textarea></br>
                <button class="btn btn-warning">Submit</button>
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
