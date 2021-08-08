<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airplane Reservation Website</title>
        <link rel="stylesheet" href="css/flightsstyle.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
          <!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>

    <body>
        <section class="Homepage">
            <?php
              include_once 'header.php';
            ?>
       
            <div class="view">
                <h1>Fly with confidence</h1>
            <!-- <p>
                We are working carefully to ensure that every step you take of your Journy is safe.
            </p> -->
            <box class="bookflight">Book a Flight</box>
        <box class="search">
            <div class="searchlist">
                <box class="Findflight">
                    <a href="flights.php"><img src="UI/search-solid 1.png" ></a>
                    <input type="submit" class="form__button" value="Find Flight">
                </box>
                
                    <ul>
    
                <li>  
                    <div class="returndrop">
                    <button class="return">Return     <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown1-content">
                      <a href="#">Go</a>
                      <a href="#">Go and Return</a>
                      
                    </div>
                    </div>
                </li>
                    <div class="passengersdrop">
                    <li><button class="passengers">Passengers     <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown2-content">
                      <a href="#">1</a>
                      <a href="#">2</a>
                      <a href="#">3</a>
                   </div></li> </div> 
                    <div class="allcabinsdrop">
                   <li> <button class="allcabins">All Cabins    <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown3-content">
                      <a href="#">First Class</a>
                      <a href="#">Business Class</a>
                      <a href="#">Economy Class</a>
                   </div></li> </div> 
                   <form action="/action_page.php">
                    <input type="date" id="from" name="from">
                    <input type="date" id="to" name="to">
                    
                  </form>
                 
                  <form class="search-container1" action="/action_page.php">
                    <input type="text" placeholder="From.." name="search">
                  </form>
                  <form class="search-container2" action="/action_page.php">
                    <input type="text" placeholder="To.." name="search">
                  </form>
                </ul>

                
            </div>
            
        </box>
            </div>
<!-- flights page-->
<div class="flights_page">
    <box class="left_part">
      <div class="timingsfrom">
        <h1>Timings: from Cairo</h1><br>
         <div class="img1"><input type="image" src="UI/button1.png"> </div>
         <div class="img2"><input type="image" src="UI/button2.png"> </div>        
         <div class="img3"><input type="image" src="UI/button3.png"> </div>
         <div class="img4"><input type="image" src="UI/button4.png"> </div>
      </div>
      <div class="timingsto">
        <h1>Timings: to Dubai</h1><br>
        <div class="img1"><input type="image" src="UI/button1.png"> </div>
        <div class="img2"><input type="image" src="UI/button2.png"> </div>        
        <div class="img3"><input type="image" src="UI/button3.png"> </div>
        <div class="img4"><input type="image" src="UI/button4.png"> </div>
     </div>

      <div class="pricerange"><label for="pricerange"><h1>Price</h1> <br><br></label>
       2000<input type="range" id="pricerange" name="pricerange" min="2000" max="25000"> 25000 
      </div>
      <br> <hr style="background-color:#E9E9E9;top:35%;position:absolute; width:90%;text-align:center;left:5%">
      <form  class="stops" action="/action_page.php">
        <h1>Stops</h1><br><br>
        <input type="checkbox" id="all" name="all" value="all">
        <label for="all"> All</label><br>
        <input type="checkbox" id="non-stop" name="non-stop" value="non-stop">
        <label for="non-stop"> non-stop</label><br>
        <input type="checkbox" id="1 stop" name="1 stop" value="1 stop">
        <label for="1 stop"> 1 stop</label><br>
        <input type="checkbox" id="2 stops" name="2 stops" value="2 stops">
        <label for="2 stops"> 1 stop</label><br><br>
      </form>
      <br> <hr style="background-color:#E9E9E9;top:49%;position:absolute; width:90%;text-align:center;left:5%">
      <form  class="Airlines" action="/action_page.php">
        <h1>Airlines</h1><br><br>
        <input type="checkbox" id="all_lines" name="all_lines" value="all_lines">
        <label for="all_lines"> All</label><br>
        <input type="checkbox" id="Qatar airlines" name="Qatar airlines" value="Qatar airlines">
        <label for="Qatar airlines"> Qatar airlines</label><br>
        <input type="checkbox" id="Etihad airlines" name="Etihad airlines" value="Etihad airlines">
        <label for="Etihad airlines"> Etihad airlines</label><br>
        <input type="checkbox" id="Turish airlines" name="Turish airlines" value="Turish airlines">
        <label for="Turish airlines"> Turish airlines</label><br>
      </form>
      <br> <hr style="background-color:#E9E9E9;top:63%;position:absolute; width:90%;text-align:center;left:5%">
      <form  class="Airports" action="/action_page.php">
        <h1>Airports</h1><br><br>
        <input type="checkbox" id="all_ports" name="all_ports" value="all_ports">
        <label for="all_ports"> All</label><br>
        <input type="checkbox" id="Cairo intl Airport" name="Cairo intl Airport" value="Cairo intl Airport">
        <label for="Cairo intl Airport">Cairo intl Airport</label><br>
        <input type="checkbox" id="Istanbul Airport" name="Istanbul Airport" value="Istanbul Airport">
        <label for="Istanbul Airport"> Istanbul Airport</label><br>
        <input type="checkbox" id="Abo Dhabi Airport" name="Abo Dhabi Airport" value="Abo Dhabi Airport">
        <label for="Abo Dhabi Airport"> Abo Dhabi Airport</label><br>
        <input type="checkbox" id="Hamad intl Airport" name="Hamad intl Airport" value="Hamad intl Airport">
        <label for="Hamad intl Airport"> Hamad intl Airport</label><br>
      </form>
      <br> <hr style="background-color:#E9E9E9;top:78%;position:absolute; width:90%;text-align:center;left:5%">
      <div class="depturerange"><label for="depturerange"><h1>Departure</h1> <br><br></label>
       20:30<input type="range" id="depturerange" name="depturerange" min="20:30" max="20:29"> 20:29
      </div>
      <br> <hr style="background-color:#E9E9E9;top:85%;position:absolute; width:90%;text-align:center;left:5%">
      <div class="returnrange"><label for="returnrange"><h1>Return </h1><br><br></label>
       20:30<input type="range" id="returnrange" name="returnrange" min="20:30" max="20:29"> 20:29
      </div>
      <br> <hr style="background-color:#E9E9E9;top:92%;position:absolute; width:90%;text-align:center;left:5%">
      <div class="Duration"> <label for="Duration"><h1>Duration</h1> <br><br></label>
       10h<input type="range" id="Duration" name="Duration" min="20:30" max="20:29"> 22h
      </div>
      </box>
    <box class="right_part">
        <box class="sorted_by">
          <p>Sorted By:</p>
             <select class="dapture" name="dapture" id="dapture">
              <option value="Daprture">Departure</option>
              <option value="London">4:30</option>
              <option value="Cairo">6:51</option>
              <option value="Rome">5:21</option>
            </select>
            <select class="arrival" name="arrival" id="arrival">
              <option value="Daprture">Arrival</option>
              <option value="London">8:45</option>
              <option value="Cairo">12:44</option>
              <option value="Rome">2:21</option>
            </select>
            <select class="price" name="price" id="price">
              <option value="Daprture">Price</option>
              <option value="Daprture">low to high</option>
              <option value="London">high to low</option>

            </select>
        </box>
        <box class="trip_details1">
            <br>
            <img src="UI/egyptair-logo.png"><p>Cairo &#8594;&#8594;&#8594;&#8594;&#8594;  Dubai<br>9:45 &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;8:13 </p>
               <br> <hr style="background-color:#1BA7E4; width:60%;text-align:center;margin-left:100px">
            <img src="UI/egyptair-logo.png"><p>Dubai &#8594;&#8594;&#8594;&#8594;&#8594; Cairo <br>11:45  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;9:13</p>
            <p class="price"><h style="margin-left:100px; font-size:16px">EGP 12350</h><br>
            <button style="background-color:#1BA7E4" type="submits" onclick="window.location.href='Bookpage1.php'">Book Now</button> 
            <br><br><br>
            <button style="background-color:white; color:#083E6F; border: #083E6F solid 1px;"  type="button">Pay later</button></p>
        </box>
        <box class="trip_details2">
            <br>
            <img src="UI/egyptair-logo.png"><p>Cairo &#8594;&#8594;&#8594;&#8594;&#8594;  Dubai<br>9:45 &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;8:13 </p>
               <br> <hr style="background-color:#1BA7E4; width:60%;text-align:center;margin-left:100px">
            <img src="UI/egyptair-logo.png"><p>Dubai &#8594;&#8594;&#8594;&#8594;&#8594; Cairo <br>11:45  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;9:13</p>
            <p class="price"><h style="margin-left:100px; font-size:16px">EGP 12350</h><br>
            <button style="background-color:#1BA7E4" type="button" onclick="window.location.href='Bookpage1.php'">Book Now</button> 
            <br><br><br>
            <button style="background-color:white; color:#083E6F; border: #083E6F solid 1px;"  type="button">Pay later</button></p>
        </box>
        <box class="trip_details3">
            <br>
            <img src="UI/egyptair-logo.png"><p>Cairo &#8594;&#8594;&#8594;&#8594;&#8594;  Dubai<br>9:45 &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;8:13 </p>
               <br> <hr style="background-color:#1BA7E4; width:60%;text-align:center;margin-left:100px">
            <img src="UI/egyptair-logo.png"><p>Dubai &#8594;&#8594;&#8594;&#8594;&#8594; Cairo <br>11:45  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;9:13</p>
            <p class="price"><h style="margin-left:100px; font-size:16px">EGP 12350</h><br>
            <button style="background-color:#1BA7E4" type="button" onclick="window.location.href='Bookpage1.php'">Book Now</button> <br><br><br><button style="background-color:white; color:#083E6F; border: #083E6F solid 1px;"  type="button">Pay later</button></p>
        </box>
        
        <box class="trip_details4">
            <br>
            <img src="UI/egyptair-logo.png"><p>Cairo &#8594;&#8594;&#8594;&#8594;&#8594;  Dubai<br>9:45 &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;8:13 </p>
               <br> <hr style="background-color:#1BA7E4; width:60%;text-align:center;margin-left:100px">
            <img src="UI/egyptair-logo.png"><p>Dubai &#8594;&#8594;&#8594;&#8594;&#8594; Cairo <br>11:45  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;9:13</p>
            <p class="price"><h style="margin-left:100px; font-size:16px">EGP 12350</h><br>
            <button style="background-color:#1BA7E4" type="button" onclick="window.location.href='Bookpage1.php'">Book Now</button> <br><br><br><button style="background-color:white; color:#083E6F; border: #083E6F solid 1px;"  type="button">Pay later</button></p>
        </box>
        <box class="trip_details5">
            <br>
             <img src="UI/egyptair-logo.png"><p>Cairo &#8594;&#8594;&#8594;&#8594;&#8594;  Dubai<br>9:45 &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;8:13 </p>
               <br> <hr style="background-color:#1BA7E4; width:60%;text-align:center;margin-left:100px">
            <img src="UI/egyptair-logo.png"><p>Dubai &#8594;&#8594;&#8594;&#8594;&#8594; Cairo <br>11:45  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;9:13</p>
            <p class="price"><h style="margin-left:100px; font-size:16px">EGP 12350</h><br>
            <button style="background-color:#1BA7E4" type="button" onclick="window.location.href='Bookpage1.php'">Book Now</button> <br><br><br><button style="background-color:white; color:#083E6F; border: #083E6F solid 1px;"  type="button">Pay later</button></p>
        </box>

    </box>


</div>
<button id="top">Top &#8593</button>   

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
    <br>
    <div class="footer-bottom">
      <hr style="width:67%;text-align:center;margin-left:280px;margin-top: -30px;">
     <li>@Safayera Air. all rights reserved@ 2020</li> 
     <li>Term of use | Privacy policy | Cokies policy | Sitemap </li>  
    </div>
   </div>

   <!-- // the flights-->


  
</section>
<script>
             const scrollButton = document.getElementById('top');

              // set sections as active.   
              window.addEventListener('scroll', activeSec);
              // scroll to top button.
              scrollButton.addEventListener('click', scrollTop);
              // scroll to section on link click. 
              //show/hide nav bar, show/hide scroll button.
              function activeSec() {
                  // headNav.style.display = 'block';
                  // show button when the user scrolls below the fold of the page.
                  if (document.body.scrollTop > innerHeight || document.documentElement.scrollTop > innerHeight)
                              scrollButton.style.display = 'block';
                          else
                              scrollButton.style.display = 'none';
                  // hide nav bar while not scrolling.
                  setTimeout(function(){headNav.style.display = 'none';}, 4000);
              }
              // scroll to top button.
              function scrollTop(){
                  window.scrollTo({
                      top: document.body.offsetTop,
                      behavior: "smooth"
                  })
              }
          </script>







</body>
</html>
        
