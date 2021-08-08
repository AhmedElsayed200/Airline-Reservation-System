<?php
include_once 'includes/alertmsgs.inc.php';
?>
1<!-- <section class="Homepage"> -->

          <!-- Header-->
          <nav>
            <a href="index.php"><img src="UI/logo.png" ></a>
            <div class="nav-links">
                <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="flights.php">Flight</a></li>
                <li><a href="#great_deals">Deals</a></li>
                </ul>
            </div>
            <div class="dropdown">
              <?php 
              if(!isset($_SESSION["uidUsers"])){
                echo '
                <button class="dropbtn">Login <br>Your Deals
                    <i class="fa fa-caret-down"></i>
                </button>';
              }
              else{
                echo '
                <button class="dropbtn"> Hello, ' . $_SESSION["uidUsers"] .'
                <i class="fa fa-caret-down"></i>
                </button>';
              }
              ?>
                <div class="dropdown-content">
                  <div class="form-popup" id="myForm">

                    <!-- The Login Form -->
                    <?php
                    if (!isset($_SESSION["uidUsers"])){
                    echo'
                    <form action="includes/login.inc.php" method="post" class="form">
                      <h1 class="form__title" style="font-size: 30px; text-align: center;">Sign In</h1>
                      <br>
                      <label for="email"><b>User name</b></label>
                      <input type="text" placeholder="Enter your user name" name="email" required>
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                      <a href="">Forget Password?</a>
                      <button type="submit" class="btn" name = "submit">Log In</button>
                      <h4 >Does not have an account?  Sign Up Now  </h4> 
                      ';
                      echo'<button type=';echo"'button'"; echo 'class="btn" onclick="document.getElementById('; echo"'id01'";echo').style.display='; echo"'block'";echo'" >Sign Up</button>';
                      echo'<!-- <span onclick="document.getElementById("id01").style.display="none"" class="close" title="Close Modal">&times;</span>-->
                    </form>';
                    
                      if (isset($_GET["error"])){
                        if($_GET["error"] == "emptyinputlogin"){
                          echo "<p> Fill in all Fields</p>";
                        }
                        else if($_GET["error"] == "wronglogin"){
                          echo "<p> Incorrect login information </p>";
                        }
                      }
                    }
                    else{
                      echo '
                      <form class="form" action="includes/logout.inc.php">
                      <button type="submit" class="btn" name = "logout">Log Out</button>
                      </form>
                      <form class="form" action="profile.php">
                      <button type="submit" class="btn" name = "profile" >Profile</button>
                      </form>
                      ';
                    }
                    ?>

                <!-- The Signup Form -->
                <div class="modal" id="id01">
                  <form  class="form" action="includes/signup.inc.php" method="post">
                    <div class="ho">
                      <h1>
                      <br><br>Sign up, 
                      <br>
                      Now.
                      <br></h1>
                      <img src="UI/Picture1.png">
                    </div>
                    <div class="container">
                      <p><br><br>Please fill in this form to create an account.</p>
                      <label for="Full Name"><br><b>Full Name</b><br></label>
                      <input type="text" placeholder="Enter full name" name="fullname" required>
                      <label for="adress"><br><b>Email Address</b><br></label>
                      <input type="text" placeholder="Enter yor Email" name="mail" required>
                      <label for="mobilenumber"><br><b>mobile number</b><br></label>
                      <input type="text" placeholder="Enter mobile number" name="number" required>
                      <label for="psw"><br><b>Password</b><br></label>
                      <input type="password" placeholder="Enter Password" name="psw" >
                      <label for="psw-repeat"><br><b>Repeat Password</b><br></label>
                      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                      <br>
                      <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                      </label>
                      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                      <div class="clearfix">
                        <button type="submit" class="signupbtn" name="signup-submit">Sign Up</button>  </div>
                      <!-- <button type="submit" formaction="">Sign Up</button>-->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </nav>
        
