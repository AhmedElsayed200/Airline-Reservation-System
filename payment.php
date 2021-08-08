<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airplane Reservation Website</title>
        <link rel="stylesheet" href="css/paymentstyle.css">
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
        
        <!--Payment Section-->
        <div class="payment">
            <div class="stepbar">
                
                    <ul>
                        
                        <li>
                            
                           <i class="fa fa-check fa-2x " ></i> 
                            <br><br>

                
                            <p>Booking info</p>

                        </li>
                        <li>  
                            <i class="fa fa-check fa-2x" ></i>
                            <br><br>

                            <p>Traveler info</p>
                        </li>
                        <li>  
                            <i class="fa fa-circle fa-lg " style="padding-top: 35px;" ></i>
                            <br><br>

                            <p>Payment</p>
                        </li>
                    
                    </ul>
                



            </div>
            <div class="paymentdetails">
                <div class="paymentbox">
                    <p>Payment</p>
                </div>
                <div class="cardinfo">
                    <div class="card_info" >
                        <div class="firstrow">
                            <h2 class="form__title">Card Info</h2>
                          <div class="card_num">
                            <h3>Credit card number</h3>
                            <div class="input_field">
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        </div> 
                          </div>
                        <div class="cvv">
                            <h3>CVV</h3>
                            <div class="input_field">
                            <input type="password" id="cvv" name="cvv" placeholder="352">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="ExpiryDate">
                        <h2 style="margin-left: -84px;">Expire Date</h2>
                        <div class="input_field1">
                        <input type="text" id="expday" name="expday" placeholder="22">
                    </div>
                        <div class="input_field1">
                        <input type="text" id="expmonth" name="expmonth" placeholder="September">
                    </div>
                        <div class="input_field1">
                        <input type="text" id="expyear" name="expyear" placeholder="2018">
                    </div>
                </div>
               
                <div class="payandbtn">
                  <div class="icon-container">
                              
                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                      <i class="fa fa-cc-amex" style="color:blue;"></i>
                      <i class="fa fa-cc-mastercard" style="color:red;"></i>
                      <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
               
                  <div class="payable">
                   <p>Total Amount Payable <br>EGP 12350
                   </p> 
                  </div>
                
                    
                   
                  <div class="paybtn1">
                
                <input type="submit" value="Confirm Payment" class="btn1" onclick = "pymntScss()">
                <script>function pymntScss(){
                    window.location.href = "index.php";
                    alert ("Payment Successful");
                  }
                </script>
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