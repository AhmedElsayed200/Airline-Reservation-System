<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airplane Reservation Website</title>
        <link rel="stylesheet" href="css/profilestyle1.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
          <!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>

 
    <body>        
        
        
        <!-- Header-->
        <?php
          include_once 'header.php';
        ?>     
   <!-- // the profile-->
<div class="profile">
<box class="left_part2">
    <button class="tripshistory">Trips History</button>
    <button class="flyerhistory">Flyer History</button>
</box>
<box class="right_part2">
    
    <box class="profilebox1"><h1>Personal Details</h1></box>
    <box class="profilebox2">
        <ul>
            <li><p class="title"><b>Name:</b>  Rawan Abdelkhalek Elkhishen </p></li>
            <li><p class="title"><b>Mobile:</b> 010605250</p> </li>
            <li><p class="title"><b>Date of birth:</b> 05/04/2000 </p></li>
            <li><p class="title"><b>Gender: </b>Female </p></li>
            <li><p class="title"><b>Nationality:</b> Egyptian </p></li>
            <li><p class="title"><b>E-mail: </b>r.elkhishen@nu.edu.eg</p></li>

        </ul>
        <button class="update1">Update</button>
    </box>
    <box class="profilebox3"><h1>Passport Details</h1></box>
    <box class="profilebox4">
        <ul>
            <li><p class="title"><b>Passport Number: </b>2335413355 </p></li>
            <li><p class="title"><b>Issuing Country:</b> 010605250</p> </li>
            <li><p class="title"><b>Expiration Date:</b> 05/04/2000 </p></li>
        </ul>
        <button class="update2">Update</button>

    </box>
    <box class="profilebox5"><h1>Recent Trips</h1></box>
    <box class="profilebox6">
        <ul>
            <li><p class="title"><b>From: </b>Cairo Int. Airport  </p></li>
            <li><p class="title"><b>To: </b>Istanbul Airport    </p> </li>
            <li><p class="title"><b>Type: </b>One Way    </p></li>
            <li><p class="title"><b>Date:</b>  15/6/2021    </p></li>
            <li><p class="title"><b>Time: </b>12:30 AM   </p> </li>
            <li><p class="title"><b>Terminal: </b>3  </p></li>
        </ul>
        <button class="cancel1">Cancel</button>

    </box>
</box>
</div>




          <!-- footer-->
           
 <div class="footer">

    <div class="footer-content">

      <div class="footer-section Quicklinks">
        <h2> Quick links </h2>
          
        
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
      <hr style="width:67%;text-align:center;margin-left:280px;margin-top: -30px;">
     <li>@Safayera Air. all rights reserved@ 2020</li> 
     <li>Term of use | Privacy policy | Cokies policy | Sitemap </li>  
    </div>
   </div>



  
<!-- </section> -->







</body>
</html>
        
