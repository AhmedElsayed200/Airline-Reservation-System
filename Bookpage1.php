<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airplane Reservation Website</title>
        <link rel="stylesheet" href="css/Bookpage1style.css">
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
        <?php
          include_once 'header.php';
        ?>
        
 
        <!--Booking Summary  Section-->
        <div class="payment">
            <div class="stepbar">
                
                    <ul>
                        
                        <li>
                            
                          <i class="fa fa-circle fa-lg " style="padding-top: 35px;" ></i>    
                                                  <br><br>

                
                            <p>Booking info</p>

                        </li>
                        <li>  
                          <i class="fa fa-times fa-2x" style="padding-top: 15px;"></i>

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
              <div class="confirm">
          
                <h3>For instant Confirmation</h3>  <h2>EGP 12350</h2>
                <form action="Bookpage2.php">
                  <input type="submit" value="Book Now" class="btn2" style="height: 7vh" required>
                  </form>
                
              </div>  
              
              
        
              
              <div class="Bookbox">
                    <p>Booking Summary
                    </p>
                </div>

               
                <div class="Booksum">
              

                  <div class="flight1">
                             <br>
                           <p class="right1">Cairo (CAI) <br>09:45, Sun 11 May <br>Cairo Int Arpt Terminal: 3
                    </p>
                    <p class="left1">Dubai (DXB) <br>13:00,Sun 11 May <br>Dubai Airport
                    </p>
                    <div class="flighttime" >
                      Total Time <br>4 hours
                    </div>
                  </div>
                  <div class="flight2">
                             
                    <p  class="right2">Dubai (DXB)<br> 14:00, Sat 05 Jun <br>Dubai Airport
             </p>
             <p class="left2">Cairo(CAI) <br>15:15,Sat 05 Jun<br> Cairo Intl Arpt Terminal:3
      
             </p>
             <div class="flighttime" >
              Total Time <br>4 hours
            </div>
      
           </div>
                   <div class="img1" ><img src="UI/egyptair-logo.png"></div>
                  <div class="img2" ><img src="UI/egyptair-logo.png"></div>
      


                    
                    <div class="fourthrow">
                
                      <div class="input_field1">
                        <h3>E-mail
                        </h3>
                      <input type="text" id="port" name="Port" placeholder="Smith@gmail.com " required>
                  </div>
                      <div class="input_field1">
                        <h3>Do you have a coupon code?
      
                        </h3>
                      <input type="text" id="nat" name="nat" placeholder="4572" required>
                  </div>
                     
                    
               

              </div> 
              <form action="Bookpage2.php">
                    <input type="submit" value="Next" class="btn1" style="height: 7vh" required>
            </form>
              

        </div>
       
        <div class="line1" >4 hrs<br><hr style="width:140%;color:gray;background-color:gray;align-self: center;left:-20%;position:absolute">Economy
        </div> 
        <div class="line2" >4 hrs<br><hr style="width:140%;color:gray;background-color:gray;align-self: center;left:-20%;position:absolute">Economy
        </div>   
  
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