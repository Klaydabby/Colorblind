<?php
if (isset($_REQUEST['username'])) {
  include ("init.php");

      $username = $_REQUEST['username'];
      $password = $_REQUEST['password'];


     // $ins="Select * from users where username='$username' AND password='$password'";
     $ins="Select * from useraccount where username='$username' ";

       $result = mysqli_query($conn, $ins);
       $num = mysqli_num_rows($result);
       if ($num ==1){
           while($row=mysqli_fetch_assoc($result)){
               if(password_verify($password, $row['password'])){
                      $login = true;
                      session_start();
                      $_SESSION['loggedin']=true;
                      $_SESSION['username']=$username;
                      // header("location: index.html");
                      echo "Your are loggedin";

               }
               else{
                   echo"Username and password do not match";
               }


           }


       }
       else{


            echo "Username and password do not match";


       }
}
  ?>
