<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airplane Reservation Website</title>
        <link rel="stylesheet" href="css/Bookpage2style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
          <!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>

    <body>
        <section class="Homepage">
           
          
          
          <!-- Header-->
          <div class="header"></div>
          <?php
            include_once 'header.php';
          ?>
          </div>
        
        <!--Contact Info Section-->
        <div class="payment">
            <div class="stepbar">
                
                    <ul>
                        
                        <li>
                            
                           <i class="fa fa-check fa-2x " ></i> 
                            <br><br>

                
                            <p>Booking info</p>

                        </li>
                        <li>  
                          <i class="fa fa-circle fa-lg " style="padding-top: 35px;" ></i>
                            <br><br>

                            <p>Traveler info</p>
                        </li>
                        <li>  
                            
                            <i class="fa fa-times fa-2x" style="padding-top: 15px;"></i>
                            <br><br>

                            <p>Payment</p>
                        </li>
                    
                    </ul>
                



            </div>
            <div class="Contactdetails">
                <div class="paymentbox">
                    <p>Payment</p>
                </div>
                <div class="contactinfo">
                    <div class="contact_info" >
                        <div class="firstrow">
                            <h2 class="form__title">Contact Info</h2>
                         
                         
                            <div class="Country_Code">
                              <h3>Country Code</h3>
                              <div class="input_field">
                              <input type="password" id="CountryCode" name="CountryCode" placeholder="02" required>
                          </div>
                          </div>
                            <div class="Phone_num">
                            <h3>Phone Number</h3>
                            <div class="input_field">
                            <input type="text" id="Phonenum" name="Phonenum" placeholder="1005625471" required>
                        </div> 
                          </div>
                        
                    </div>
                    </div>
                    <div class="Adult">
                      <div class="secondrow">
                        <h2 >Adult 1</h2>
                        <div class="dropdown1"> 
                          <button class="dropbtn" name = "gender" id="i01">Gender
                              <i class="fa fa-caret-down"></i>
                          </button>
                           <div class="dropdown1-content">
                              <a href="#" onclick = "female()"> Female</a>
                              <a  href="#" onclick = "male()">Male</a>
                            </div>
                          </div>
                      </div>
                      <script>
                        function female(){
                          event.preventDefault();
                          const drop = document.getElementById("i01");
                          drop.innerHTML = 'Female <i class="fa fa-caret-down"></i>';
                        }
                        function male(){
                          event.preventDefault();
                          const drop = document.getElementById("i01");
                          drop.innerHTML = 'Male <i class="fa fa-caret-down"></i>';
                        }
                      </script>
                    </li>
                      <div class="thirdrow">
                        <div class="input_field1">
                          <h3>First Name</h3>
                        <input type="text" id="finame" name="finame" placeholder=" Mary" required>
                    </div>
                        <div class="input_field1">
                          <h3>Middel Name</h3>
                        <input type="text" id="midname" name="midname" placeholder="Elizabeth" required>
                    </div>
                        <div class="input_field1">
                          <h3>Last Name</h3>
                        <input type="text" id="lasname" name="lasname" placeholder="Smith" required>
                    </div>
                </div>
              </div> 
              <div class="fourthrow">
                <h2 >Passport Info</h2>
                <div class="input_field1">
                  <h3>Pass Port Number
                  </h3>
                <input type="text" id="port" name="Port" placeholder="533380006 " required>
            </div>
                <div class="input_field1">
                  <h3>Nationality
                  </h3>
                <input type="text" id="nat" name="nat" placeholder="Egyption" required>
            </div>
                
                <div class="input_field1">
                  <h3>Issuing Country
                  </h3>
                <input type="text" id="coun" name="coun" placeholder=" Egypt" required>
            </div>
              
        </div>
        <div class="date">
          <h2 >Date of Birth</h2>
        </div>
       
        <div class="fifthrow">
         
          <div class="input_field1">
            
          <input type="text" id="expday" name="expday" placeholder="22" required>
      </div>
          <div class="input_field1">
          <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
      </div>
          <div class="input_field1">
          <input type="text" id="expyear" name="expyear" placeholder="2018" required>
      </div>
  </div>
  <div class="date1">
    <h2 >Passport Expiry Date
    </h2>
  </div>
 
  <div class="sixthrow">
   
    <div class="input_field1">
      
    <input type="text" id="expday" name="expday" placeholder="22" required>
</div>
    <div class="input_field1">
    <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
</div>
    <div class="input_field1">
    <input type="text" id="expyear" name="expyear" placeholder="2018" required>
</div>
</div>
                <form action="Payment.php">
                    <input type="submit" value="Proceed" class="btn1" style="height: 7vh" required>
                </form>

      </div> 
      
    </div> 
                
                
                
              </div>  
              </div>
            </div> 
          </div>      
                          
                          
                        </div>
                      
                        
            </div>

        </div>
           
        
           <!-- footer-->
           
           <div class="footer">

            <div class="footer-content">

              <div class="footer-section Quicklinks">
                <h2> Quick links </h2>
                  
                
                <br>
                <ul>
                  <li><a href="#">Safayera airline profile</a></li>
                    <li><a href="#">Flights</a></li>
                    <li> <a href="#">Awards and achivements</a></li>
                    <li><a href="#">Alliance and partners</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li> <a href="#">Mobile app</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li> <a href="#">Contact us</a></li>
                </ul>
              </div>
            
              <div class="footer-section Contactus">
                <h2 style="margin-left: 350px;"> Contact With us </h2>
                
                <br>
              <div class="logo">
                <a href="index.html"><img src="UI/logo.png" ></a>

              </div>
              <div class="social">
              <a href="index.html"><img src="UI/facebook-square-brands 1.png" ></a>
                <a href="index.html"><img src="UI/instagram-square-brands 1.png" ></a>
                 <a href="index.html"><img src="UI/linkedin-brands 1.png" ></a>
                <a href="index.html"><img src="UI/twitter-square-brands 1.png" ></a>
              </div>
                

              </div>

            

            </div>
         
            <div class="footer-bottom">
              <hr style="width:65.5%;text-align:left;margin-left:280px;margin-bottom:15px;margin-top: 10px;">
             <li>@Safayera Air. all rights reserved@ 2020</li> 
             <li>Term of use | Privacy policy | Cokies policy | Sitemap </li>  
            </div>
           </div>
      
           <!-- // footer-->

      
          
        </section>

        







    </body>
</html>