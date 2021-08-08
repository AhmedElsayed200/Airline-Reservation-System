<?php
  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Airplane Reservation Website</title>
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
          <!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>

    <body>

<!-- include the header file -->
<?php
  include_once 'header.php';
?>
<!-- Search Section-->

       
            <div class="view">
              
                <h1>Fly with confidence</h1>
            <p>
                We are working carefully to ensure that every step you take of your Journy is safe.
            </p>
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
                    <button class="return" id="rtrn">Return     <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown1-content">
                      <a href="#" onclick = "go()">Go</a>
                      <a href="#" onclick = "goAndReturn()">Go and Return</a>
                    </div>
                    </div>
                </li>
                    <div class="passengersdrop">
                    <li><button class="passengers" id="pssngrs">Passengers     <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown2-content">
                      <a href="#" onclick="n01()">1</a>
                      <a href="#" onclick="n02()">2</a>
                      <a href="#" onclick="n03()">3</a>
                   </div></li> </div> 
                    <div class="allcabinsdrop">
                   <li> <button class="allcabins" id="clss">All Cabins    <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown3-content">
                      <a href="#" onclick="frstClss()">First Class</a>
                      <a href="#" onclick="scndClss()">Business Class</a>
                      <a href="#" onclick="thrdClss()">Economy Class</a>
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
                  <script>
                    function go(){
                      event.preventDefault();
                      const drop = document.getElementById("rtrn");
                      drop.innerHTML = 'Go     <i class="fa fa-caret-down">';
                    }
                    function goAndReturn(){
                      event.preventDefault();
                      const drop = document.getElementById("rtrn");
                      drop.innerHTML = 'Go and Return <i class="fa fa-caret-down">';
                    }
                    function n01(){
                      event.preventDefault();
                      const drop = document.getElementById("pssngrs");
                      drop.innerHTML = '1     <i class="fa fa-caret-down"></i>';
                    }
                    function n02(){
                      event.preventDefault();
                      const drop = document.getElementById("pssngrs");
                      drop.innerHTML = '2     <i class="fa fa-caret-down"></i>';
                    }
                    function n03(){
                      event.preventDefault();
                      const drop = document.getElementById("pssngrs");
                      drop.innerHTML = '3     <i class="fa fa-caret-down"></i>';
                    }
                    function frstClss(){
                      event.preventDefault();
                      const drop = document.getElementById("clss");
                      drop.innerHTML = 'First Class    <i class="fa fa-caret-down">';
                    }
                    function scndClss(){
                      event.preventDefault();
                      const drop = document.getElementById("clss");
                      drop.innerHTML = 'Business Class  <i class="fa fa-caret-down">';
                    }
                    function thrdClss(){
                      event.preventDefault();
                      const drop = document.getElementById("clss");
                      drop.innerHTML = 'Economy Class    <i class="fa fa-caret-down">';
                    }

                  </script>
                </ul>

                
            </div>
            
        </box>
            </div>


     <!-- Deals Section-->

            <div id="great_deals"> <br> <br><h2>Great deals</h2>
              <ul>
                <li><box ><img src="UI/deal1.jpg">
                <h3>A big offer to Hemalaia!</h3>
                <p>Hemalia mountians are a great place to visit, You can see new nature and people.Big discount to Evrest.<br> <a href="url">see more details</a> </p>
                </box></li>
                <li><box><img src="UI/deal2.jpg">
                  <h3>A ticket to Camp Nou!</h3>
                  <p>Spain is one of the most diverse counties. In addition to the wonderful nature, they have sports and activities.<br> <a href="url">see more details</a> </p>
                </box></li>
                <li><box><img src="UI/deal3.jpg">
                  <h3 style="margin-left:70px;">Let's go SKating!</h3>
                  <p>A great offer to Russria where you can ice-skate on day and see the wondeful Sydney at night.<br> <a href="url">see more details</a> </p>
                </box></li>
              </ul>
            </div>


         <!-- About us Section-->

            <div class="about_us">
                <box class="Aboutus">
                    <h2> About Us</h2>
                    <div class="row">
                        <div class="column" style="background-color:inherit;">
                          
                          <a href="index.html"><img src="UI/headset-solid 1.png" ></a>
                          <h3>Customer Support</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna <br>aliqua.</p>
                        </div>
                        <div class="column" style="background-color:inherit;">
                          <a href="index.html"><img src="UI/piggy-bank-solid 1.png" ></a>
                          <h3 style="margin-left: 65px;">Save More</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna <br>aliqua.</p>
                        </div>
                        <div class="column" style="background-color:inherit;">
                            <a href="index.html"><img src="UI/user-shield-solid 1.png" ></a>
                            <h3>Safe and Secure</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna <br>aliqua.</p>
                          </div>
                        <div class="column" style="background-color:inherit;">
                            <a href="index.html"><img src="UI/smile-regular 1.png" ></a>
                            <h3 style="margin-left:95px;">    Trust</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna <br>aliqua.</p>
                         </div>
                      </div>

                </box>
            </div>
            <button id="top">Top &#8593</button>   
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
          
          <!-- // footer-->
    </body>
</html>